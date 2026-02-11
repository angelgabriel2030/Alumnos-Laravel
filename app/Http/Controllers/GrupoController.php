<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grupo;

class GrupoController extends Controller
{
    public function index()
    {
        return Grupo::with('carrera','alumnos')->get();
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'carrera_id' => 'required|exists:carreras,id'
        ]);

        $grupo = Grupo::create($request->all());

        return response()->json($grupo, 201);
    }
}
