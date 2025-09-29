<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $fillable = [
        'client_id',
        'card_number',
        'card_name',
        'bank',
        'balance'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
