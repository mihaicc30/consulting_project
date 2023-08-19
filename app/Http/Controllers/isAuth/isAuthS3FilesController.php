<?php

namespace App\Http\Controllers\isAuth;

use App\Http\Controllers\Controller;
use App\Models\ezepostTracking;
use Aws\S3\S3Client;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ezepostUser;
use DateTime;
use Illuminate\Support\Facades\Log;
use Jenssegers\Agent\Agent;
use ZipArchive;

class isAuthFilesController extends Controller
{

    public function get()
    {
        // $transfers = Transfers::get();

        // to get and send to web page all data related to user and transfers
        $transfers = ["x", "y"]; // fake data
        return view("isauth.files", ['transfers' => $transfers]);
    }

    public function getAllFiles()
    {
        $user = auth()->user()->load('ezepostUser');
        $ezepostUser = $user->ezepostUser;
        $getAllReceived = ezepostTracking::where('receiver_ezepost_addr', $ezepostUser->ezepost_addr)->get();
        $getAllSent = ezepostTracking::where('sender_ezepost_addr', $ezepostUser->ezepost_addr)->get();


        return view('isauth.files', [
            'getAllSent' => $getAllSent,
            'getAllReceived' => $getAllReceived
        ]);
    }

    public function uploadImage(Request $request)
    {

        if ($request->hasFile('file')) {

            // Get the receiver email from the request
            $receiverEmail = $request->input('useremail');
            $receiverUser = $this->getezepostUserByEmail($receiverEmail);
            $receiverDisplayName = $request->input('userdisplayname');

            // Check if the receiver email exists in the database
            if (!$receiverUser) {
                return back()->with('error', 'Receiver email does not exist');
            }

            // Get the file
            $file = $request->file('file');
            // Get the filename
            $originalName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            // Get the file size
            $fileSize = $file->getSize();

            // Convert the size in a more readable fashion
            $humanReadable = $this->formatBytes($fileSize);

            // Compress the file using gzip and get the compressed file path and size
            $compressedFile = $this->compressFile($file);
            $compressedFilePath = $compressedFile['path'];
            $compressedFileSize = $compressedFile['size'];

            // Get the original file extension
            $extension = strtolower($file->getClientOriginalExtension());
            $uniqId = uniqid() . '_' . mt_rand(1000, 9999) . '.';
            $fileName = $uniqId;

            // Define the folder path within the bucket
            $folderPath = 'others/';
            $imageExtensions = ['jpg', 'psd', 'jpeg', 'png', 'gif', 'apng', 'avif', 'webp', 'svg', 'bmp', 'tiff', 'ico'];
            $videoExtensions = ['mp4', 'avi', 'mov', 'wmv'];
            $textExtensions = ['doc', 'docx', 'odt', 'pdf', 'rtf', 'tex', 'txt', 'wpd'];
            $archiveExtensions = ['rar', 'zip', '7z', 'tar', 'gz', 'ace'];


            if (in_array($extension, $imageExtensions)) {
                $folderPath = 'images/';
            } elseif (in_array($extension, $videoExtensions)) {
                $folderPath = 'videos/';
            } elseif (in_array($extension, $textExtensions)) {
                $folderPath = 'text/';
            } elseif (in_array($extension, $archiveExtensions)) {
                $folderPath = 'archives/';
            }

            // Create the object key by combining the folder path and the random name with the file extension
            $objectKey = $folderPath . $fileName . 'zip';

            // Amazon S3 configuration
            $s3Client = new S3Client([
                'credentials' => [
                    'key' => config('aws.AWS_ACCESS_KEY_ID'),
                    'secret' => config('aws.AWS_SECRET_ACCESS_KEY'),
                ],
                'region' => config('aws.AWS_DEFAULT_REGION'), // Fetch the region from the .env file
                'version' => 'latest',
                'http'    => ['verify' => false]
            ]);

            $bucket = config('aws.AWS_BUCKET');

            // Amazon S3 upload file
            $s3Client->putObject([
                'Bucket' => $bucket,
                'Key' => $objectKey,
                'Body' => fopen($compressedFilePath, 'r'),
                'ACL' => 'public-read',
            ]);

            // Get the file URL
            $fileUrl = $s3Client->getObjectUrl($bucket, $objectKey);

            // Generate the pre-signed URL with a 1-hour expiration time
            $command = $s3Client->getCommand('GetObject', [
                'Bucket' => $bucket,
                'Key' => $objectKey,
            ]);

            $presignedUrl = $s3Client->createPresignedRequest($command, '+1 hour')->getUri()->__toString();

            // Retrieve the username of the sender
            /** @var User $user */
            $user = auth()->user()->load('ezepostUser');

            // Get user OS and OS version
            $ezepost = $this->getUserOS($request);

            // Create a new ezepostTracking instance and fill in the data
            $ezepostTracking = new ezepostTracking();
            $ezepostTracking->mpID = $uniqId;
            $ezepostTracking->sender_username = $user->ezepostUser->username;
            $ezepostTracking->sender_ezepost_addr = $user->ezepostUser->ezepost_addr;
            $ezepostTracking->sender_displayname = $user->ezepostUser->displayname;
            $ezepostTracking->sender_OS = $ezepost['os'];
            $ezepostTracking->sender_OS_version = $ezepost['osVersion'];
            $ezepostTracking->sender_device_name = $ezepost['deviceName'];
            $ezepostTracking->receiver_username = $receiverUser->username ?? $receiverDisplayName;
            $ezepostTracking->receiver_ezepost_addr = $receiverUser->ezepost_addr;
            $ezepostTracking->receiver_displayname = $receiverUser->displayname;
            $ezepostTracking->file_name = $originalName . '.' . $extension;
            $ezepostTracking->file_size_original = $humanReadable;
            $ezepostTracking->file_size_transfer = $this->formatBytes($compressedFileSize);
            $ezepostTracking->file_url = $fileUrl;
            $ezepostTracking->time_send_start = new DateTime();
            $ezepostTracking->sender_pub_ip = $request->input('userip');
            $ezepostTracking->presigned_url = $presignedUrl;
            $ezepostTracking->save();

            // Redirect back with a success message
            return back()->with('success', 'File sent successfully');
        }


        // Redirect back with an error message
        return back()->with('error', 'No file was provided');
    }

    // To keep in mind that if the user is using inspect in the browser, we will get
    // the os and osversion of the device the browser is emulating at that time
    public function getUserOS(Request $request)
    {
        $userAgent = $request->header('User-Agent');
        $agent = new Agent();
        $agent->setUserAgent($userAgent);

        $os = $agent->platform(); // Get the operating system
        $osVersion = $agent->version($os); // Get the operating system version
        $deviceName = $agent->device(); // Get the device name

        return [
            'os' => $os,
            'osVersion' => $osVersion,
            'deviceName' => $deviceName
        ];
    }

    private function getezepostUserByEmail($email)
    {
        // Assuming you have a "ezepost_users" table to store ezepost_user information
        $ezepostUser = ezepostUser::where('ezepost_addr', $email)->first();

        // If the ezepost_user exists, return it
        if ($ezepostUser) {
            return $ezepostUser;
        }

        // If the ezepost_user does not exist, return null
        return null;
    }

    private function formatBytes($bytes, $precision = 2)
    {
        $units = ['B', 'KB', 'MB', 'GB', 'TB'];

        $bytes = max($bytes, 0);
        $pow = floor(($bytes ? log($bytes) : 0) / log(1024));
        $pow = min($pow, count($units) - 1);

        return round($bytes / (pow(1024, $pow)), $precision) . ' ' . $units[$pow];
    }

    private function compressFile($file)
    {

        $tempDir = sys_get_temp_dir();
        $originalFileName = $file->getClientOriginalName();
        $tempFileName = $originalFileName . '.zip';
        $tempFilePath = $tempDir . DIRECTORY_SEPARATOR . $tempFileName;

        // Create a new ZIP archive
        $zip = new ZipArchive();
        if ($zip->open($tempFilePath, ZipArchive::CREATE) !== true) {
            // Failed to create ZIP archive, handle the error
            return null;
        }

        // Add the original file to the ZIP archive
        $zip->addFile($file->getPathname(), $originalFileName);

        // Close the ZIP archive
        $zip->close();

        $compressedFileSize = filesize($tempFilePath); // Get the size of the compressed file

        return [
            'path' => $tempFilePath,
            'size' => $compressedFileSize,
        ];
    }
}
