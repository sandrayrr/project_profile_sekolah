<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| CONTROLLERS
|--------------------------------------------------------------------------
*/

// Auth & Admin
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;

// Admin CRUD
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\BerandaController;
use App\Http\Controllers\Admin\ArtikelController;
use App\Http\Controllers\Admin\GaleriController;
use App\Http\Controllers\Admin\PrestasiController;
use App\Http\Controllers\Admin\FasilitasController;
use App\Http\Controllers\Admin\AgendaController;
use App\Http\Controllers\Admin\EkstrakulikulerController;
use App\Http\Controllers\Admin\TenagaPengajarController;
use App\Http\Controllers\Admin\StaffKependidikanController;

// Front Controllers
use App\Http\Controllers\BerandaController as FrontBerandaController;
use App\Http\Controllers\Front\ArtikelController as FrontArtikelController;
use App\Http\Controllers\Front\GaleriController as FrontGaleriController;
use App\Http\Controllers\Front\PrestasiController as FrontPrestasiController;
use App\Http\Controllers\Front\AgendaController as FrontAgendaController;
use App\Http\Controllers\Front\FasilitasController as FrontFasilitasController;
use App\Http\Controllers\Front\EkstrakulikulerController as FrontEkstrakulikulerController;
use App\Http\Controllers\Front\TenagaPengajarController as FrontTenagaPengajarController;
use App\Http\Controllers\Front\StaffKependidikanController as FrontStaffKependidikanController;
use App\Http\Controllers\Front\PplgController;
use App\Http\Controllers\Front\TjktController;


/*
|--------------------------------------------------------------------------
| PUBLIC / FRONT PAGES
|--------------------------------------------------------------------------
*/

Route::get('/', [FrontBerandaController::class, 'index'])->name('beranda');

Route::view('/profil', 'pages.profil')->name('profil');
Route::view('/organisasi', 'pages.organisasi')->name('organisasi');
Route::view('/jurusan', 'pages.jurusan')->name('jurusan');
Route::view('/link', 'pages.link')->name('link');
Route::view('/akreditasi', 'pages.akreditasi')->name('akreditasi');

// Artikel
Route::get('/artikel', [FrontArtikelController::class, 'index'])->name('artikel.index');
Route::get('/artikel/kategori/{kategori}', [FrontArtikelController::class, 'kategori'])->name('artikel.kategori');
Route::get('/artikel/{id}', [FrontArtikelController::class, 'show'])->name('artikel.show');

// Front Content
Route::get('/galeri', [FrontGaleriController::class, 'index'])->name('galeri');
Route::get('/prestasi', [FrontPrestasiController::class, 'index'])->name('prestasi');
Route::get('/agenda', [FrontAgendaController::class, 'index'])->name('agenda');
Route::get('/fasilitas', [FrontFasilitasController::class, 'index'])->name('fasilitas');
Route::get('/ekstrakulikuler', [FrontEkstrakulikulerController::class, 'index'])->name('ekstrakulikuler');

// SDM Sekolah
Route::get('/tenagapengajar', [FrontTenagaPengajarController::class, 'index'])->name('tenagapengajar');
Route::get('/staffkependidikan', [FrontStaffKependidikanController::class, 'index'])->name('staffkependidikan');
// Jurusan
Route::get('/pplg', [PplgController::class, 'index'])->name('pplg');
Route::get('/tjkt', [TjktController::class, 'index'])->name('tjkt');


/*
|--------------------------------------------------------------------------
| AUTH
|--------------------------------------------------------------------------
*/

Route::get('/login', [AuthController::class, 'loginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'registerForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


/*
|--------------------------------------------------------------------------
| ADMIN (AUTH)
|--------------------------------------------------------------------------
*/

Route::middleware('auth')
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

        Route::resource('users', UserController::class);
        Route::resource('beranda', BerandaController::class);
        Route::resource('artikel', ArtikelController::class);
        Route::resource('galeri', GaleriController::class);
        Route::resource('prestasi', PrestasiController::class);
        Route::resource('fasilitas', FasilitasController::class);
        Route::resource('agenda', AgendaController::class);
        Route::resource('tenagapengajar', TenagaPengajarController::class);
        Route::resource('staffkependidikan', StaffKependidikanController::class);
        Route::resource('ekstrakulikuler', EkstrakulikulerController::class);
    });
