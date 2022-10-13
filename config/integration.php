<?php

return [
    'main' => [
        'bin' => env('SCHOOL_BIN', "0123456789123"),
        'id' => env('SCHOOL_ID', 0),
    ],
    'api' => [
        'host' => env('SMART_HOST'),
        'ping_url' => env('URL_PING'),
    ]
];