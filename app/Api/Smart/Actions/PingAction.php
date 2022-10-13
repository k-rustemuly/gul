<?php

namespace App\Api\Smart\Actions;

use App\Api\Smart\Domain\Services\PingService as Service;
use App\Responders\JsonResponder as Responder;

class PingAction
{

    public function __construct(Responder $responder, Service $service)
    {
        $this->responder = $responder;
        $this->service = $service;
    }

    public function __invoke()
    {
        return $this->responder->withResponse(
            $this->service->handle()
        )->respond();
    }
}