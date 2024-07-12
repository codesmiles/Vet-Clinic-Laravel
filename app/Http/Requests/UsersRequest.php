<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsersRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "name" => "string|required",
            "role" => "required|in:admin,employee,client",
            "email" =>"email|required|unique:user",
            "address" => "required|string",
            "password" => "required|min:8|password|confirmed",
            "role_title" => "string|nullable",
            "phone_number" => "required|numeric",
        ];
    }
}
