<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cancha extends Model
{
    use HasFactory;

    protected $table = 'canchas';
    protected $primaryKey = 'id_cancha';

    protected $fillable = [
        'tipo',
        'precio_hora',
        'estado',
        'ubicacion',
        'capacidad'
    ];

    public function reservas()
    {
        return $this->hasMany(Reserva::class, 'id_cancha');
    }
}
