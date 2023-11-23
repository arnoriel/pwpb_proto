<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\PopbukuController;
use App\Http\Controllers\SettingController;
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
Route::get('/books', function () {
    return view('buku');
});
Route::get('/book', function () {
    return view('book.index');
});
Route::get('/beranda', function () {
    return view('beranda.index');
});
Auth::routes();
Route::get('/buku', function () {
    return view('buku.index');
});
Route::get('/popbuku', function () {
    return view('popbuku.index');
});
Route::get('/setting', function () {
    return view('setting.index');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
route::resource('buku', BukuController::class);
Route::get('/book', [App\Http\Controllers\BukuController::class, 'index2']);
Route::get('/book/{id}', [App\Http\Controllers\BukuController::class, 'detail']);
Route::resource('popbuku', PopbukuController::class);
Route::get('/book', [App\Http\Controllers\PopbukuController::class, 'indexpop']);
Route::get('/book', [App\Http\Controllers\SettingController::class, 'setbook']);
route::resource('setting', SettingController::class);
Route::get('/beranda', [App\Http\Controllers\SettingController::class, 'indexset']);
