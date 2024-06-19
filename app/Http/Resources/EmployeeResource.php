<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EmployeeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            "id" => $this["id"],
            "role" => $this["role"],
            "email" => $this["email"],
            "address" => $this["address"],
            "password" => $this["password"],
            "full_name" => $this["full_name"],
            "start_date" => $this["start_date"],
            "employee_id" => $this["employee_id"],
            "phone_number" => $this["phone_number"],
        ];
    }
}
