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
use App\Http\Controllers\Admin\AgendaController;
use App\Http\Controllers\Admin\TenagaKependidikanController;
use App\Http\Controllers\Admin\EkstrakulikulerController;
use App\Http\Controllers\BerandaController as ControllersBerandaController;
use App\Http\Controllers\front\TenagaKependidikanController as FrontTenagaKependidikanController;
use App\Http\Controllers\front\AgendaController as FrontAgendaController;
use App\Http\Controllers\front\ArtikelController as FrontArtikelController;
use App\Http\Controllers\front\PrestasiController as FrontPrestasiController;
use App\Http\Controllers\front\GaleriController as FrontGaleriController;
use App\Http\Controllers\front\FasilitasController as FrontFasilitasController;
use App\Http\Controllers\front\StaffPengajarController as FrontStaffPengajarController;
use App\Http\Controllers\front\EkstrakulikulerController as FrontEkstrakulikuler;
use App\Http\Controllers\Admin\StaffPengajarController;

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
Route::get('/agenda', [FrontAgendaController::class , 'index'])->name('agenda');
Route::view('/link', 'pages.link')->name('link');
Route::get('/fasilitas', [FrontFasilitasController::class, 'index'])->name('fasilitas');
Route::view('/akreditasi', 'pages.akreditasi')->name('akreditasi');
Route::get('/tenagakependidikan', [FrontTenagaKependidikanController::class , 'index'])->name('tenagakependidikan');
Route::get('/ekstrakulikuler', [FrontEkstrakulikuler::class, 'index'])->name('ekstrakulikuler');
Route::get('/staffpengajar', [FrontStaffPengajarController::class, 'index'])->name('staff-pengajar');
Route::view('/tenaga-pengajar', 'pages.tenaga-pengajar')->name('tenaga-pengajar');
Route::view('/organisasi', 'pages.organisasi')->name('organisasi');



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

/*
|--------------------------------------------------------------------------
| FRONT ARTIKEL (PUBLIC)
|--------------------------------------------------------------------------
*/
Route::get('/artikel', [FrontArtikelController::class, 'index'])
    ->name('artikel.index');

Route::get('/artikel/kategori/{kategori}', [FrontArtikelController::class, 'kategori'])
    ->name('artikel.kategori');

Route::get('/artikel/{id}', [FrontArtikelController::class, 'show'])
    ->name('artikel.show');


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
        Route::resource('users', UserController::class);
        Route::resource('beranda', BerandaController::class);
        Route::resource('artikel', ArtikelController::class);
        Route::resource('galeri', GaleriController::class);
        Route::resource('prestasi', PrestasiController::class);
        Route::resource('fasilitas', FasilitasController::class)
        ->parameters(['fasilitas' => 'fasilitas']);
        Route::resource('agenda', AgendaController::class);
        Route::resource('staff-pengajar', StaffPengajarController::class);
        Route::resource('tenaga', TenagaKependidikanController::class);
        Route::resource('ekstrakulikuler', EkstrakulikulerController::class);

});