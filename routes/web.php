<?php

use App\Http\Controllers\TradController;
use App\Http\Livewire\AddTrad;
use App\Http\Livewire\EditTrad;
use App\Http\Livewire\Trads;
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

Auth::routes();
Route::get('/', Trads::class)->name("home");
Route::get('/add-trad', AddTrad::class)->name("add_trad");
Route::get('/edit-trad/{id}', EditTrad::class)->name("edit_trad");

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
