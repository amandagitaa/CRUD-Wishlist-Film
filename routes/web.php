<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmController;

Route::get('/', function () {
    return redirect('/films');
});

Route::resource('films', FilmController::class);