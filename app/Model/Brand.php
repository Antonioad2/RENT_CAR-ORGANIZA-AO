<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Brand extends Model
{
    //
    use SoftDeletes;
    protected $fillable = [
        'name', 
        'image',
        'description', 
        'date'
    ];

    public function models()
    {
        return $this->hasMany(Model::class , 'brand_id');
    }
}
