<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Offer extends Model
{
    //
    use SoftDeletes;

    protected $fillable = [
        'title',
        'subtitle',
        'image',
        'description',
        'offer_date',
    ];
}
