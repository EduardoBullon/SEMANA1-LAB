<?php

use Illuminate\Support\Facades\Route;

// Hacer que la raíz muestre tu página personalizada
Route::get('/', function () {
    return view('presentacion');
});

// (opcional) mantener /presentacion como alias
Route::get('/presentacion', function () {
    return view('presentacion');
});
