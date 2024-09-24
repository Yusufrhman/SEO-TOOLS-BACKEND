<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrendsController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/trends', [TrendsController::class, 'index']);
