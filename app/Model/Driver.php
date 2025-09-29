<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Driver extends Model
{
    //
    use softDeletes;
    protected $fillable = [
        'full_name',
        'document_identification',
        'id_image',
        'license_image',
        'license_type',
        'driver_type',
        'license_expiry_date',
        'phone_number', 
        'email',
        'experience_years',
        'gender',
        'address',
        'daily_price'
    ];
}
