<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sell extends Model
{
    //
    use SoftDeletes;
    protected $fillable = [
        'name',
        'description',
        'price',
        'image',
        'number',
        'whatsapp',
    ];
}
