<?php
namespace App\Enums;

enum ResponseCodeEnums: int
{
    /*
    |--------------------------------------------------------------------------
    | Transaction
    |--------------------------------------------------------------------------
    */
    case EMPLOYEE_NOT_FOUND = 1000;
    case EMPLOYEE_QUERY_ERROR = 1001;


    public function getCode()
    {
        return $this;
    }

    public function toString()
    {
        return match ($this) {
            /*
            |--------------------------------------------------------------------------
            | Transaction Response
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
        };
    }
}
