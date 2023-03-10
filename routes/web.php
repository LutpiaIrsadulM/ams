<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\QrCodeController;

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
    return view('index');
});

Route::get('/qrcode', [QrCodeController::class, 'index']);
Route::get('/qrcode/create/{id}', [QrCodeController::class, 'create']);

Route::get('/items', [ItemController::class, 'index']);
Route::get('/items/tambah', [ItemController::class, 'tambah']);
Route::post('/items/store', [ItemController::class, 'store']);

Route::get('/items/search/{qr_num}', [ItemController::class, 'search']);