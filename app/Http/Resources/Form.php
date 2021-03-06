<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Form extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
       // return parent::toArray($request);
        return[
            'id' =>$this->id,
            'firstname' => $this -> firstname,
             'last name' => $this -> lastname,
             'email' => $this ->email,
             'subject' => $this -> subject,
             'description' =>$this->description


        ];
    }
}
