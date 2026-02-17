<?php

namespace App\Http\Controllers;

use App\Models\Universidad;
use Illuminate\Http\Request;

class UniversidadController extends Controller
{
    public function index()
    {
        return Universidad::with('carreras')->get();
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'direccion' => 'required|string'
        ]);

        $universidad = Universidad::create($request->all());

        return response()->json($universidad, 201);
    }
}
