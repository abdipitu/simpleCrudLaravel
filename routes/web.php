<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlayerController;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', [PlayerController::class, 'home'])->name('home');
Route::get('/add', [PlayerController::class, 'add'])->name('add');
Route::post('/addplayer', [PlayerController::class, 'addplayer'])->name('addplayer');
Route::get('/edit/{id}', [PlayerController::class, 'edit'])->name('edit');
Route::post('/update/{id}', [PlayerController::class, 'update'])->name('update');
Route::get('/delete/{id}', [PlayerController::class, 'delete'])->name('delete');


