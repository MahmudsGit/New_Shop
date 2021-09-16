<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $fillable = [
        'category_id',
        'brand_id',
        'product_name',
        'short_description',
        'long_description',
        'product_price',
        'product_quantity',
        'product_image',
        'product_status'];
}
