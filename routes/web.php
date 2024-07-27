<?php

use App\Http\Controllers\ReadController;
use App\Http\Controllers\UpdateController;
use App\Http\Controllers\DeleteController;
use App\Http\Controllers\CreateController;

use Illuminate\Support\Facades\Route;

Route::get('/listar-proyectos', [ReadController::class, 'index']);

Route::patch('/actualizar-proyecto/{id}', [UpdateController::class, 'update']);

Route::delete('/eliminar-proyecto/{id}', [DeleteController::class, 'delete']);

Route::post('/crear-proyecto', [CreateController::class, 'store']);
