<?php

use App\Http\Controllers\PetController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [PetController::class,'index'])->name('pets.index');
Route::get('/pets/create',[PetController::class,'create'])->middleware('auth')->name('pets.create');
Route::post('/pets/store',[PetController::class,'store'])->middleware('auth')->name('pets.store');
Route::get('/pets/{id}',[PetController::class,'show'])->name('pets.show');
Route::get('/meusPets',[PetController::class,'userPets'])->name('pets.userPets');

Route::delete('/pets/{id}',[PetController::class,'destroy'])->name('pets.show');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
