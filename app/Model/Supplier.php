<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Supplier extends Model
{
    //
    use softdeletes;
    protected $fillable = [
        'name',
        'email',
        'phone',
        'nif',
        'vehicle_logbook_upload',
        'photo',
        'bi',
        'bi_upload',
        'address',
        'car_id',
        'registration_date'
    ];
    public function cars()
    {
        return $this->hasMany(Car::class, 'supplier_id');
    }
}
