<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\castController;
use App\Http\Controllers\PostController;
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

Route::get('/',  [HomeController::class, 'utama']);
Route::get('/biodata', [HomeController::class, 'bio']);
Route::post('/submit', [HomeController::class, 'submit']);
Route::get('/table', function(){
    return view('halaman.table');
});
Route::get('/data-table', function(){
    return view('halaman.data-table');
});
// CRUD Cast
// menampilkan list data para pemain film (boleh menggunakan table html atau bootstrap card)
Route::get('/cast/create', [castController::class, 'create']);
// menyimpan data baru ke tabel Cast
Route::post('/cast', [castController::class, 'store']);
// read tampil semua data
Route::get('/cast',  [castController::class, 'index']);
// DETAIL CAST
Route::get('/cast/{cast_id}',  [castController::class, 'show']);
// update
// form update cast
Route::get('/cast/{cast_id}/edit', [castController::class, 'edit']);
// update data ke database berdasarkan id
Route::put('/cast/{cast_id}', [castController::class, 'update']);
// delet berdasarkan id
Route::delete('/cast/{cast_id}', [castController::class, 'destroy']);
// CRUD post
Route::resource('Post', postController::class);