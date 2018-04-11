<?php

namespace App\Http\Resources\User;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
           'user_first_name' => $this->user_first_name,
           'user_last_name' => $this->user_last_name,
           'user_phone_number' => $this->user_phone_number,
           'user_aadhar_card_number'=>$this->user_aadhar_card_number,
           'user_profile_picture'=>$this->user_profile_picture,
           'user_about'=>$this->user_about,
           'user_residence'=>$this->user_residence,
           'user_city'=>$this->user_city,
           'user_country'=>$this->user_country
        ];
    }
}
