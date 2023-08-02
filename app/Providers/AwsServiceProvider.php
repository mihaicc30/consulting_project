<?php

namespace App\Providers;

use Aws\S3\S3Client;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\ServiceProvider;
use League\Flysystem\AwsS3V3\AwsS3Adapter;

class AwsServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('aws', function () {
            return S3Client::factory([
                'credentials' => [
                    'key' => config('aws.AWS_ACCESS_KEY_ID'),
                    'secret' => config('aws.AWS_SECRET_ACCESS_KEY'),
                ],
                'region' => config('aws.AWS_DEFAULT_REGION'),
                'version' => 'latest',
            ]);
        });

        Storage::extend('s3', function ($app, $config) {
            $client = $this->app['aws'];

            // Ensure the 'bucket' parameter is provided in the configuration
            if (empty($config['bucket'])) {
                throw new \InvalidArgumentException('S3 bucket name missing in configuration.');
            }

            return new \League\Flysystem\Filesystem(new AwsS3Adapter($client, $config['bucket']));
        });
    }
}
