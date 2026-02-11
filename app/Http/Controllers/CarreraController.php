<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carrera;

class CarreraController extends Controller
{
    public function index()
    {
        return Carrera::with('universidad','grupos')->get();
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'universidad_id' => 'required|exists:universidades,id'
        ]);

        $carrera = Carrera::create($request->all());

        return response()->json($carrera, 201);
    }
}
