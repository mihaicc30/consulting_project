<?php

return [
    /*
    |--------------------------------------------------------------------------
    | AWS Access Key ID
    |--------------------------------------------------------------------------
    |
    | The AWS access key ID that corresponds to the AWS account.
    |
    */

    'AWS_ACCESS_KEY_ID' => env('AWS_ACCESS_KEY_ID'),

    /*
    |--------------------------------------------------------------------------
    | AWS Secret Access Key
    |--------------------------------------------------------------------------
    |
    | The AWS secret access key that corresponds to the AWS account.
    |
    */

    'AWS_SECRET_ACCESS_KEY' => env('AWS_SECRET_ACCESS_KEY'),

    /*
    |--------------------------------------------------------------------------
    | AWS Default Region
    |--------------------------------------------------------------------------
    |
    | The default AWS region to be used for services.
    |
    */

    'AWS_DEFAULT_REGION' => env('AWS_DEFAULT_REGION'),

    /*
    |--------------------------------------------------------------------------
    | AWS Bucket Name
    |--------------------------------------------------------------------------
    |
    | The name of the AWS S3 bucket where you want to store files.
    |
    */

    'AWS_BUCKET' => env('AWS_BUCKET'),
];
