<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
   public $table='contacts';
    protected $fillable = [
       'fname','lname', 'email','phone','message',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
