<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sender extends Model
{
    protected $fillable = [
    	'name',
        'email',
        'sender_address',
        'password'
    ];
}
