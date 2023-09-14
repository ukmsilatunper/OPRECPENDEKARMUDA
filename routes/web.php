<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalonController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DaftarController;

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
    return view('home');
});

Route::resource('/daftar', DaftarController::class);
Route::get('/dashboard/calon', [CalonController::class, 'index'])->middleware('admin');
Route::delete('/dashboard/calon/{daftar:prodi_id}', [CalonController::class , 'destroy'])->middleware('admin');

Route::get('/galeri', function () {
    return view('galeri');
});
Route::get('/tentang', function (){
    return view('tentang');
});
Route::get('/login', [LoginController::class , 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', function (){
    return view('dashboard.index');
})->middleware('admin');