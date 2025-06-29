<?php
use App\Http\Controllers\SendEmailController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/home', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/siswa', [SiswaController::class, 'index']);
Route::match(['get', 'post'], '/siswa/insert', [SiswaController::class, 'insert']);
Route::match(['get', 'post'], '/siswa/update/{id}', [SiswaController::class, 'update']);
Route::get('/siswa/delete/{id}', [SiswaController::class, 'delete']);
Route::get('/siswa/wali', [SiswaController::class, 'wali']);
Route::get('/guru', [GuruController::class, 'index']);
Route::match(['get', 'post'], '/guru/insert', [GuruController::class, 'insert']);
Route::match(['get', 'post'], '/guru/update/{id}', [GuruController::class, 'update']);
Route::get('/guru/delete/{id}', [GuruController::class, 'delete']);
Route::get('/guru/mapel', [GuruController::class, 'mapel']);
Route::get('/send-email', [SendEmailController::class, 'index'])->name('send-email');
Route::post('/post-email', [SendEmailController::class, 'store'])->name('post-email');