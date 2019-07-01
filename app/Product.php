<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = ['name', 'description', 'bathroom', 'bedroom', 'area', 'price', 'address', 'product_type', 'product_space', 'author'];
}
