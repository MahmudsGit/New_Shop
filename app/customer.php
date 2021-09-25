<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    protected $fillable = ['first_name','last_name','mobile','email','address','password'];
}
