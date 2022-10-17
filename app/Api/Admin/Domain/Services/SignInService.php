<?php

namespace App\Api\Admin\Domain\Services;

use App\Domain\Payloads\GenericPayload;
use App\Domain\Services\Service;

class SignInService extends Service
{

    public function __construct(){
    }

    public function handle($data = array())
    {
        if(auth()->guard('admin')->attempt($data))
        {
            return auth()->guard('admin')->user();
        }
        return new GenericPayload(array());
    }

}