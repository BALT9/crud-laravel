<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::get('/students', function(){
    return 'Studenst List';
}); 

Route::get('/students/{id}', function(){
    return 'obtener un solo estudiante';
}); 

Route::post('/students', function(){
    return 'Creando estudiantes';
});

Route::put('/students/{id}', function(){
    return 'Actualizando estudiante';
});

Route::delete('/students/{id}', function(){
    return 'Eliminar estudiante';
}); 
 

