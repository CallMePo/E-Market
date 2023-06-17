<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignUpController;
use App\Http\Controllers\InformasiTokoController;
use App\Http\Controllers\BuatTokoController;
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

Route::get('/', function () {
    return view('welcome');
});

/*Route::controller(SignUpController::class)->group(function() {
    Route::get('/formulir', 'formulir');
    Route::post('/formulir/submit','submit');
    Route::post('/formulir/input','input');
});*/


Route::get('/register', [SignUpController::class, 'register'])->name('register');
Route::post('/register', [SignUpController::class, 'registerPost'])->name('register');

Route::get('/informasitoko', [InformasiTokoController::class, 'melihatInfoToko']);

Route::get('/buattoko1', [BuatTokoController::class, 'buattoko1'])->name('buattoko1');
Route::get('/buattoko2', [BuatTokoController::class, 'buattoko2'])->name('buattoko2');
Route::get('/buattoko3', [BuatTokoController::class, 'buattoko3'])->name('buattoko3');
