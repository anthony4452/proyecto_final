<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Pago;
use Illuminate\Http\Request;

class PagoController extends Controller
{
    public function index()
    {
        return Pago::with('reserva')->get();
    }

    public function store(Request $request)
    {
        return Pago::create($request->all());
    }
}
