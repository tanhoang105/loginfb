<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
        'scheme' => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'facebook' => [
        'client_id' => '908525466778273',
        'client_secret' => '20c265bd5e44b9934f17340cd6012f89',
        'redirect' => '/auth/facebook/callback',
    ],

    'google' => [
        'client_id' => '574489480900-mpq8ma429lf2l97mej11lhpa4fd89auf.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => '/auth/google/callback',
    ],

];
