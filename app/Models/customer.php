<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
//use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;


class customer extends Authenticatable
{
    use HasFactory;

    function setNameAttribute($value)
    {
        return ucfirst($value);
    }
}
