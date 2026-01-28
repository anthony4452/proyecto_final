<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;

    protected $table = 'reservas';
    protected $primaryKey = 'id_reserva';

    protected $fillable = [
        'fecha',
        'hora_inicio',
        'hora_fin',
        'id_cliente',
        'id_cancha'
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'id_cliente');
    }

    public function cancha()
    {
        return $this->belongsTo(Cancha::class, 'id_cancha');
    }

    public function pago()
    {
        return $this->hasOne(Pago::class, 'id_reserva');
    }
}
