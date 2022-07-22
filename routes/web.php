<?php

use App\Http\Controllers\Pengguna;
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
    return view('login/login');
});

// Route::get('pengguna', [Pengguna::class, 'index']);
Route::get('pengguna', 'Pengguna@index');
Route::get('/pengguna/{nama}', 'Pengguna@getPengguna');
Route::get('/form', 'Pengguna@form');
Route::post('/form/getData', 'Pengguna@getData');

Route::get('admin', 'Admin@index');
Route::get('admin/users', 'Admin@getUsers');
Route::get('admin/product', 'Admin@getProducts');
Route::get('admin/product/{product:slug}', 'Admin@detailProduct');
