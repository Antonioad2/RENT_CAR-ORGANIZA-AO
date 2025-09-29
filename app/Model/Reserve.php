<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reserve extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'client_id',
        'car_id',
        'pickup_location', // novo campo
        'start_date',
        'end_date',
        'total_amount',
        'resources', // agora plural
        'driver_id',
        'status',
        'return_location', 
        'delivery_time', 
        'return_time'
    ];

    protected $casts = [
        'resources' => 'array', // Laravel converte automaticamente JSON <-> array
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function car()
    {
        return $this->belongsTo(Car::class);
    }

    public function driver()
    {
        return $this->belongsTo(Driver::class);
    }

    protected static function booted()
    {
        // Quando a reserva é criada → carro reservado
        static::created(function ($reserve) {
            if ($reserve->car) {
                $reserve->car->update(['status' => 'reserved']);
            }
        });

        // Quando a reserva é atualizada → verificar status
        static::updated(function ($reserve) {
            if ($reserve->car) {
                if (in_array($reserve->status, ['cancelled', 'completed'])) {
                    $reserve->car->update(['status' => 'available']);
                }
            }
        });

        // Se a reserva for eliminada → carro volta a ficar disponível
        static::deleted(function ($reserve) {
            if ($reserve->car) {
                $reserve->car->update(['status' => 'available']);
            }
        });
    }


}

