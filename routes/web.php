<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\PrestasiController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\BerandaController;
use App\Http\Controllers\Admin\ArtikelController;
use App\Http\Controllers\Admin\GaleriController;
use App\Http\Controllers\Admin\FasilitasController;
use App\Http\Controllers\BerandaController as ControllersBerandaController;
use App\Http\Controllers\front\ArtikelController as FrontArtikelController;
use App\Http\Controllers\front\PrestasiController as FrontPrestasiController;
use App\Http\Controllers\front\GaleriController as FrontGaleriController;

/*
|--------------------------------------------------------------------------
| Public Pages
|--------------------------------------------------------------------------
*/
Route::get('/', [ControllersBerandaController::class, 'index'])->name('beranda');
Route::view('/profil', 'pages.profil')->name('profil');
Route::view('/jurusan', 'pages.jurusan')->name('jurusan');
Route::get('/artikel', [FrontArtikelController::class , 'index'])->name('artikel');
Route::get('/galeri', [FrontGaleriController::class , 'index'])->name('galeri');
Route::get('/prestasi', [FrontPrestasiController::class , 'index'])->name('prestasi');
Route::view('/link', 'pages.link')->name('link');
Route::view('/fasilitas', 'pages.fasilitas')->name('fasilitas');
Route::view('/akreditasi', 'pages.akreditasi')->name('akreditasi');
Route::view('/ekstrakulikuler', 'pages.ekstrakulikuler')->name('ekstrakulikuler');
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
        Route::resource('artikel', ArtikelController::class);
        Route::resource('galeri', GaleriController::class);
        Route::resource('prestasi', PrestasiController::class);
        Route::resource('fasilitas', FasilitasController::class)
        ->parameters(['fasilitas' => 'fasilitas']);
        

});


