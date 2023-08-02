<?php

namespace App\Http\Controllers\isAuth;

use App\Http\Controllers\Controller;
use App\Models\VepostTracking;
use Aws\S3\S3Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class isAuthFilesController extends Controller
{

    public function get()
    {
        // $transfers = Transfers::get();

        // to get and send to web page all data related to user and transfers
        $transfers = ["x", "y"]; // fake data
        return view("isauth.files", ['transfers' => $transfers]);
    }

    public function uploadImage(Request $request)
    {

        if ($request->hasFile('file')) {

            $file = $request->file('file');
            Log::info($file);
            $fileName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            // Get the original file extension
            $extension = strtolower($file->getClientOriginalExtension());
            $uniqId = uniqid() . '_' . mt_rand(1000, 9999) . '.';
            $fileName = $uniqId + $extension;

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
            $objectKey = $folderPath . $fileName;

            // Upload the file to S3
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

            $s3Client->putObject([
                'Bucket' => $bucket,
                'Key' => $objectKey,
                'Body' => fopen($file->getPathname(), 'r'),
                'ACL' => 'public-read',
            ]);

            Log::info(Auth::user());
            // Save the S3 URL to the database
            $fileUrl = $s3Client->getObjectUrl($bucket, $fileName);

            $vepostTracking = new VepostTracking();
            $vepostTracking->mpID = $uniqId;
            $vepostTracking->file_name = $fileName;
            $vepostTracking->view_once = $fileUrl;
            $vepostTracking->save();

            // Redirect back with a success message
            return back()->with('success', 'File sent successfully');
        }

        // Redirect back with an error message
        return back()->with('error', 'No file was provided');
    }
}
