<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GamesController;



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




// Route::resource('games', GamesController::class);
Route::get('/tambah', [GamesController::class, 'tambah'])->name('tambah');  
Route::get('/about', [GamesController::class, 'about'])->name('about');
Route::get('/home', [GamesController::class, 'home'])->name('home');
Route::get('/', [GamesController::class, 'home'])->name('home');
Route::post('/games/create', [GamesController::class, 'create'])->name('games.create');

Route::get('/edit/{g}', [GamesController::class, 'edit'])->name('edit');
Route::put('/update/{game}', [GamesController::class, 'update'])->name('games.update');
Route::get('/delete/{g}', [GamesController::class, 'delete'])->name('delete');








