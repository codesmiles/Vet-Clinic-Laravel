<?php

namespace App\Http\Controllers\v1;

use App\Models\User;
use Illuminate\Http\Request;
use App\Traits\ResponseTrait;
use App\Http\Controllers\Controller;
use App\Enums\ResponseCodeEnums;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    use ResponseTrait;

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $validation = Validator::make($request->all(), [
            "name" => "string|required",
            "role" => "required|in:admin,employee,client",
            "email" =>"email|required|unique:user",
            "address" => "required|string",
            "password" => "required|min:8|password|confirmed",
            "role_title" => "string|nullable",
            "phone_number" => "required|numeric",
        ]);

        if ($validation->fails()) {
            return $this->sendResponse($validation->errors(), ResponseCodeEnums::AUTH_REQUEST_VALIDATION_ERROR);
        }

        return $request->all();
    //    $create_user = User::create($request->all());

    //    if(!$create_user){
    //      return $this->sendResponse([],ResponseCodeEnums::AUTH_REQUEST_ERROR);
    //    }

    //    return $this->sendResponse(UserResource::make($create_user), ResponseCodeEnums::AUTH_REQUEST_SUCCESSFUL);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function login(Request $request)
    {
        $token = $request->user()->createToken($request->token_name);
        $data = ['token' => $token->plainTextToken];

        return $this->sendResponse($data, ResponseCodeEnums::AUTH_REQUEST_SUCCESSFUL);
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function forgot_password()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function reset_password()
    {
        //
    }
}
