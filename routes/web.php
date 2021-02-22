<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\HomeController;
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
//praktikum 1
//Route::get('/', function () {
    //return "selamat datang";
//});
//Route::get('/about', function () {
    //return "MOH. WIKI DARMAWAN 1941720174";
//});
//Route::get('/Articles/{id}', function ($id) {
   // return "Halaman Artikel dengan ID:".$id;
//});

//praktikum 2
Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'about']);
Route::get('/Articles/{id}', [articleController::class, 'Articles']);