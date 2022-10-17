<?php

namespace App\Api\Admin\Domain\Requests;

use App\Http\Requests\APIRequest;

class SignInFormRequest extends APIRequest
{

    public function rules()
    {
        return [
            'email' => 'required|email:rfc,dns',
            'password' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'email.required' => __('Email address is required'),
            'email.email' => __('The value is not a valid email address'),
            'password.required' => __('The password is required'),
        ];
    }
}