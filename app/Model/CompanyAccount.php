<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CompanyAccount extends Model
{
    //
    protected $fillable = [
        'company_name',
        'balance',
    ];
}
