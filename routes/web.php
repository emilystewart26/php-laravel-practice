<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PetController;

// Landing page
Route::get('/', [PetController::class, 'index'])->name('landing');


Route::get('/pets/{pet}', [PetController::class, 'show'])->name('pet.show');