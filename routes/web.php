<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\StudioController;

Route::get('/', function () {
    return view('home');
});

Route::get('/services', [ServicesController::class, "index"])->name("services.index");

Route::get('/studio', [StudioController::class, "index"])->name("studio.index");
