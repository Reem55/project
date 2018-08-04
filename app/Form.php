<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    protected $fillable = [
        'first name', 'last name', 'email', 'subject', 'description',
    ];
}
