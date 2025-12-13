<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\BerandaController;

/*
|--------------------------------------------------------------------------
| Public Pages
|--------------------------------------------------------------------------
*/
Route::view('/', 'pages.beranda')->name('beranda');
Route::view('/profil', 'pages.profil')->name('profil');
Route::view('/jurusan', 'pages.jurusan')->name('jurusan');
Route::view('/artikel', 'pages.artikel')->name('artikel');
Route::view('/galeri', 'pages.galeri')->name('galeri');
Route::view('/prestasi', 'pages.prestasi')->name('prestasi');
Route::view('/link', 'pages.link')->name('link');
Route::view('/fasilitas', 'pages.fasilitas')->name('fasilitas');
Route::view('/akreditasi', 'pages.akreditasi')->name('akreditasi');
Route::view('/ekstrakurikuler', 'pages.ekstrakurikuler')->name('ekstrakurikuler');
Route::view('/agenda', 'pages.agenda')->name('agenda');
Route::view('/staffpengajar', 'pages.staffpengajar')->name('staffpengajar');


/*
|--------------------------------------------------------------------------
| Auth
|--------------------------------------------------------------------------
*/
Route::get('/login', [AuthController::class, 'loginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'registerForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/register', [AuthController::class, 'registerForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

/*
|--------------------------------------------------------------------------
| Admin Area (AUTH)
|--------------------------------------------------------------------------
*/
Route::middleware('auth')
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

        // Dashboard
        Route::get('/dashboard', [AdminController::class, 'dashboard'])
            ->name('dashboard');

        // CRUD
        Route::resource('beranda', BerandaController::class);
        Route::resource('users', UserController::class);
});