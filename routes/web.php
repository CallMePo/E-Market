<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\TokoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\SignUpController;
use App\Http\Controllers\AlihkanController;
use App\Http\Controllers\SignOutController;
use App\Http\Controllers\statistikController;
use App\Http\Controllers\EditBarangController;
use App\Http\Controllers\HapusBarangController;
use App\Http\Controllers\LupaPasswordController;
use App\Http\Controllers\InformasiTokoController;
use App\Http\Controllers\PreviewBarangController;
use App\Http\Controllers\AturEtalaseTokoController;


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

Route::get('/buattoko1', [TokoController::class, 'buattoko1'])->name('buattoko1');
Route::get('/buattoko2', [TokoController::class, 'buattoko2'])->name('buattoko2');
Route::get('/buattoko3', [TokoController::class, 'buattoko3'])->name('buattoko3');
Route::post('/buattoko2', [TokoController::class, 'buattokopost'])->name('buattoko2post');

//CRUD
Route::get('/index', [TokoController::class, 'index']);

//Routing Log Out//
Route::get('logout',[SignOutController::class, 'logout'])->name('logout')->middleware('auth');

//Routing Lupa Password//
Route::get('forgot-password', [LupaPasswordController::class, 'forgotpassword']);
Route::post('forgot-password', [LupaPasswordController::class, 'PostForgotPassword']);
Route::get('reset/{token}', [LupaPasswordController::class, 'reset']);
Route::post('reset/{token}', [LupaPasswordController::class, 'PostReset']);

//Routing Edit Barang//
Route::get('/barang/edit/{id}',[EditBarangController::class, 'edit']);
Route::post('/barang/update', [EditBarangController::class, 'update']);

//Routing Preview Barang//
Route::get('/barang/preview/{id}',[PreviewBarangController::class, 'view']);

//Routing Hapus Barang//
Route::get('/barang/hapus/{id}',[HapusBarangController::class, 'hapus']);

//Routing Etalase Toko//
Route::get('/toko/aturetalase/{toko}',[AturEtalaseTokoController::class, 'pick']);
Route::get('/toko/aturetalase/',[AturEtalaseTokoController::class, 'pick']);

Route::get('/emarket', function () {
    return view('home');
});

Route::get('/signin', [LoginController::class, 'signin'])->name('signin')->middleware('guest');
Route::post('/signin', [LoginController::class, 'signinPost'])->name('signin');
Route::get('/home', [LoginController::class, 'home'])->name('home');
Route::get('/informasihargabarang', [BarangController::class, 'showListHargaBarang'])->name('informasihargabarang');
Route::get('/informasibarang', [BarangController::class, 'showDetailBarang'])->name('informasibarang');
Route::get('/informasitoko', [TokoController::class, 'showDetailToko'])->name('informasitoko');
Route::get('/kontaktoko', [TokoController::class, 'showKontakToko'])->name('kontaktoko');
Route::get('/open.whatsapp', [AlihkanController::class, 'openWhatsApp'])->name('open.whatsapp');
Route::get('/open.facebook', [AlihkanController::class, 'openFacebook'])->name('open.facebook');

ROUTE::get('/pengaturan-akun', [UserController::class, 'pengaturanAkun'])->name('pengaturan-akun')->middleware('auth');

