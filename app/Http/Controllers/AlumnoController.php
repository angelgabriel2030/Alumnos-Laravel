<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;

class AlumnoController extends Controller
{
     public function index()
    {
        return Alumno::with('grupo','materias')->get();
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'grupo_id' => 'required|exists:grupos,id'
        ]);

        $alumno = Alumno::create($request->all());

        return response()->json($alumno, 201);
    }

    public function asignarMateria(Request $request, $id){
        $request->validate([
        'materia_id' => 'required|exists:materias,id'
    ]);

    $alumno = Alumno::findOrFail($id);

    $alumno->materias()->attach($request->materia_id);

    return response()->json([
        'message' => 'Materia asignada correctamente'
    ]);
    }

}
