<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/games', [GameController::class, 'index'])->name("games.index");
Route::get('/games/create', [GameController::class, 'create'])->name("games.create");
Route::post('/games', [GameController::class, 'store'])->name("games.store");