<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Car extends Model
{
    //
    use SoftDeletes;
    protected $fillable = [
        'chassi',
        'category',
        'type_car',
        'models_id',
        'color_id',
        'brand_id',
        'fuel_id',
        'supplier_id',
        'mileage',
        'number_of_doors',
        'number_of_seats',
        'engine',
        'transmission',
        'manufacture_date',
        'registration_date',
        'observations',
        'license_plate',
        'image',
        'car_insurance',
        'car_insurance_upload',
        'car_document',
        'car_document_upload',
        'inspection_date',
        'inspection_document_upload',
        'price',
        'status',
        'interior_image',
         'lateral_image', 
         'exterior_image'
    ];

    public function models()
    {
        return $this->belongsTo(Models::class);
    }
    public function color()
    {
        return $this->belongsTo(Color::class);
    }
    public function brand()
    {
        return $this->belongsTo(Brand::class);      
    }
    public function fuel()
    {
        return $this->belongsTo(Fuel::class);
    }
    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }
    public function reserves()
    {
        return $this->hasMany(Reserve::class);
    }
}
