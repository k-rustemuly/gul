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
        if (!$user || !Hash::check($data["password"], $user->password)) {
            throw new MainException("The provided credentials are incorrect");
        }
        $token = $user->createToken("a", [
            "item:create",
            "item:update",
            "item:delete",
        ])->plainTextToken;

        return new GenericPayload([
            "token" => $token,
            "name" => $user->name,
            "email" => $user->email,
        ]);
    }

}