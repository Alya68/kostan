<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\DetailFasilitasController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\FotoKostController;
use App\Http\Controllers\KostanController;
use App\Http\Controllers\MediaPembayaranController;
use App\Http\Controllers\TypeKamarController;
use App\Models\Kostan;
use Illuminate\Support\Facades\Route;

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


// Route::get('/', function () {
//     return view('layouts.menu');
// });

// Route::get('/', function () {
//     return view('layouts.header');
// });

Route::get('/', function () {
    // return view('welcome');
    return view('layouts.home');
});
Route::get('/home', function () {
    // return view('welcome');
    return view('layouts.home');
});

