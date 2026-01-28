<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table = 'clientes';
    protected $primaryKey = 'id_cliente';

    protected $fillable = [
        'cedula',
        'nombre',
        'telefono',
        'email',
        'estado'
    ];

    public function reservas()
    {
        return $this->hasMany(Reserva::class, 'id_cliente');
    }
}
