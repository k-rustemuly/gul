<?php

namespace App\Api\Admin\Domain\Services;

use App\Domain\Payloads\GenericPayload;
use App\Domain\Services\Service;
use App\Api\Admin\Domain\Models\Admin;
use Illuminate\Support\Facades\Hash;
use App\Exceptions\MainException;

class SignInService extends Service
{

    public function __construct(){
    }

    public function handle($data = array())
    {
        $user = Admin::where('email', $data["email"])->first();
        if (! $user || ! Hash::check($data["password"], $user->password)) {
            throw new MainException("The provided credentials are incorrect");
        }
        return new GenericPayload(array( $user->createToken("a")->plainTextToken));
    }

}