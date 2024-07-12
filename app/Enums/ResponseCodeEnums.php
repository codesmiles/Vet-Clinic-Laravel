<?php
namespace App\Enums;

enum ResponseCodeEnums: int
{

    /*
    |--------------------------------------------------------------------------
    | Employee
    |--------------------------------------------------------------------------
    */
    case EMPLOYEE_NOT_FOUND = 1000;
    case EMPLOYEE_QUERY_ERROR = 1001;

    /*
    |--------------------------------------------------------------------------
    | User Response
    |--------------------------------------------------------------------------
    */
    case USER_REQUEST_ERROR = 2001;
    case USER_REQUEST_SUCCESSFUL = 2002;



    public function getCode()
    {
        return $this;
    }

    public function toString()
    {
        return match ($this) {
            /*
            |--------------------------------------------------------------------------
            | Employee Response
            |--------------------------------------------------------------------------
            */
            self::EMPLOYEE_NOT_FOUND => [
                'status' => 400,
                'response_code' => $this,
                'message' => $this->name
            ],
            self::EMPLOYEE_QUERY_ERROR => [
                'status' => 400,
                'response_code' => $this,
                'message' => $this->name
            ],
            /*
            |--------------------------------------------------------------------------
            | User Response
            |--------------------------------------------------------------------------
            */
            self::USER_REQUEST_ERROR => [
                'status' => 400,
                'response_code' => $this,
                'message' => $this->name
            ],
            self::USER_REQUEST_SUCCESSFUL => [
                'status' => 200,
                'response_code' => $this,
                'message' => $this->name
            ],
        };
    }
}
