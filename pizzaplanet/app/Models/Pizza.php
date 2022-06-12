<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    use HasFactory;

    //Changes the name of the table that the data is pushed too
    protected $table = 'pizza';

    //Changes topping from an array to json when pushed to db and from json back to array when data is pulled from db
    protected $casts = [
        'toppings' => 'array',
    ];
}