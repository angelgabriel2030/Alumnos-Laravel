<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TutorController extends Controller
{
    public function index()
    {
        return Tutor::all();
    }

    public function store(Request $request)
    {
        return Tutor::create($request->all());
    }

    public function show($id)
    {
        return Tutor::with('fotos')->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $tutor = Tutor::findOrFail($id);
        $tutor->update($request->all());
        return $tutor;
    }

    public function destroy($id)
    {
        Tutor::destroy($id);
        return response()->json(['ok'=>true]);
    }
}

