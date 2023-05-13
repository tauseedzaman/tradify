<?php

use App\Http\Controllers\TradController;
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

Route::middleware([])->group(function () {
    Route::get("/", [TradController::class, "index"])->name("trads");
    Route::get("/add", [TradController::class, "create"])->name("trad.add");
    Route::post("/add", [TradController::class, "store"])->name("trad.save");
    Route::get("/edit/{id}", [TradController::class, "edit"])->name("trad.edit");
    Route::post("/edit/{id}", [TradController::class, "update"])->name("trad.update");
    Route::get("/delete/{id}", [TradController::class, "destroy"])->name("trad.delete");
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
