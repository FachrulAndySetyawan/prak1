<?php

use App\Http\Controllers\prak1;
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

Route::get('/', function () {
    return view('home0146');
});
Route::get('/home0146', [prak1::class,'homeku']);
Route::get('/Artikel0146', [prak1::class,'artikelku']);
Route::get('/contakus0146', [prak1::class,'contakku']);