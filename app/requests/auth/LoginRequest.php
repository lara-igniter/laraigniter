<?php

namespace App\requests\auth;

use App\requests\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * @return array
     */
    public function rules() : array
    {
        return [
            'identity' => ['required','valid_email'],
            'password' => ['required'],
            'remember' => ['integer']
        ];
    }

    /**
     * @return array
     */
    public function messages() : array
    {
        return [
            
        ];
    }

    /**
     * @return array
     */
    public function attributes(): array
    {
        return [
            'identity' => lang('attribute_identity'),
            'password' => lang('attribute_password'),
        ];
    }
}