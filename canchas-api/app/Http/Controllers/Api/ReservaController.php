<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Reserva;
use Illuminate\Http\Request;

class ReservaController extends Controller
{
    public function index()
    {
        return Reserva::with(['cliente', 'cancha'])->get();
    }

    public function store(Request $request)
    {
        return Reserva::create($request->all());
    }

    public function destroy($id)
    {
        Reserva::destroy($id);
        return response()->json(['message' => 'Reserva eliminada']);
    }
}
