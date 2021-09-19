<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ad extends Model
{
    protected $fillable = ['main_ad','off_percent','main_image','seceondary_ad','secondary_image','third_ad','third_image','fourth_ad','fourth_image'];
}
