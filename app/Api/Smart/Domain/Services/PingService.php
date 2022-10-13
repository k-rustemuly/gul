<?php

namespace App\Api\Smart\Domain\Services;

use App\Domain\Payloads\GenericPayload;
use App\Domain\Services\Service;
use Illuminate\Support\Facades\Http;

class PingService extends Service
{

    public function __construct(){
    }

    public function handle()
    {
        $data = config('integration.main');
        $urls = config('integration.api');
        $response = Http::post($urls["ping_url"], $data);
        return new GenericPayload(array($response->status()));
    }

}