<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Cancha;
use Illuminate\Http\Request;

class CanchaController extends Controller
{
    public function index()
    {
        return Cancha::all();
    }

    public function store(Request $request)
    {
        return Cancha::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $cancha = Cancha::findOrFail($id);
        $cancha->update($request->all());
        return $cancha;
    }

    public function destroy($id)
    {
        Cancha::destroy($id);
        return response()->json(['message' => 'Cancha eliminada']);
    }
}
