<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UniversidadController;
use App\Http\Controllers\CarreraController;
use App\Http\Controllers\GrupoController;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\MateriaController;

Route::apiResource('universidades', UniversidadController::class);
Route::apiResource('carreras', CarreraController::class);
Route::apiResource('grupos', GrupoController::class);
Route::apiResource('alumnos', AlumnoController::class);
Route::apiResource('materias', MateriaController::class);
Route::post('alumnos/{id}/asignar-materia', [AlumnoController::class, 'asignarMateria']);
