<?php

namespace App\Api\Admin\Actions;

use App\Api\Admin\Domain\Requests\SignInFormRequest as Request;
use App\Api\Admin\Domain\Services\SignInService as Service;
use App\Responders\JsonResponder as Responder;

class SignInAction
{

    public function __construct(Responder $responder, Service $service)
    {
        $this->responder = $responder;
        $this->service = $service;
    }

    public function __invoke(Request $request)
    {
        return $this->responder->withResponse(
            $this->service->handle($request->validated())
        )->respond();
    }
}