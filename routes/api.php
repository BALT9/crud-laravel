<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// importar siempre con mayuscula el App
use App\Http\Controllers\StudentController;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

// ruta para obtener las lista de estudiantes 
Route::get('/students', [StudentController::class, 'index']); 

Route::get('/students/{id}', [StudentController::class, 'show']);

Route::post('/students', [StudentController::class, 'store']);

Route::put('/students/{id}', function(){
    return 'Actualizando estudiante';
});

Route::delete('/students/{id}', function(){
    return 'Eliminar estudiante';
}); 
 

