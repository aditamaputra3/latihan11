<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\RegisterController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', function () {
    return view('Content.login');
})->name('login')->middleware('guest');

Route::get('/register', function (){
    return view('Content.register');
})->middleware('guest');

Route::post('/post-register', [RegisterController::class, 'store']);
Route::post('/post-login', [AuthController::class, 'postLogin']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::middleware(['auth'])->group(function (){
    Route::get('/dashboard-home', function () {
        return view('Content.dashboard-home');
    });
});

Route::group(['middleware' => ['auth', 'rolecek:user,admin']], function () {
    Route::get('/dashboard-produk', [ProdukController::class,'index']);
});

Route::resource('produk', ProdukController::class);

Route::group(['middleware' => ['auth', 'rolecek:admin']], function () {
    Route::resource('/dashboard-edit-produk', ProdukController::class);
    Route::get('/dashboard-tambah-produk', [ProdukController::class,'create']);
    Route::post('/dashboard-tambah-produk', [ProdukController::class,'store']);
    Route::get('/dashboard-edit-produk', [ProdukController::class,'edit']);
    Route::put('/dashboard-edit-produk', [ProdukController::class,'update']);
});

//print
Route::get('print-produk', [ProdukController::class,'print']);

