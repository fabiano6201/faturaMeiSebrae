<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LancamentoController;

Route::resource('lancamentos',LancamentoController::class);

Route::get('/', function () {
    return view('lancamentos');
});

Route::get('/lancamentos', function () {
    return view('lancamentos');
});