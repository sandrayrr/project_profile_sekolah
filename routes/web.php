<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\User;


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
use App\Http\Controllers\Admin\MarketplaceController;

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
use App\Http\Controllers\Front\MarketPlaceController as FrontMarketPlaceController;
use App\Http\Controllers\Front\PplgController;
use App\Http\Controllers\Front\TjktController;
use App\Http\Controllers\Front\AklController;
use App\Http\Controllers\Front\TkrController;
use App\Http\Controllers\Front\MpController;
use App\Http\Controllers\Front\DpibController;
use App\Http\Controllers\Front\SkController;

/*
|--------------------------------------------------------------------------
| API ROUTES (untuk status online/offline)
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->get('/user/status/{id}', function ($id) {
    $user = User::find($id);

    if (!$user) {
        return response()->json(['online' => false]);
    }

    $isOnline = $user->last_activity &&
                $user->last_activity->gt(now()->subMinutes(2));

    return response()->json([
        'online' => $isOnline,
        'last_seen' => $user->last_activity
            ? $user->last_activity->diffForHumans()
            : 'Belum pernah aktif',
    ]);
});
// Get all online users (optional)
Route::get('/api/users/online', function() {
    $onlineUsers = \App\Models\User::where('last_activity', '>=', now()->subMinutes(1))
        ->select('id', 'name', 'email', 'role', 'last_activity')
        ->get();
    
    return response()->json($onlineUsers);
})->middleware('auth');

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
Route::get('/marketplace', [FrontMarketPlaceController::class, 'index'])->name('marketplace');

// Jurusan
Route::get('/pplg', [PplgController::class, 'index'])->name('pplg');
Route::get('/tjkt', [TjktController::class, 'index'])->name('tjkt');
Route::get('/akl',  [AklController::class,  'index'])->name('akl');
Route::get('/tkr',  [TkrController::class,  'index'])->name('tkr');
Route::get('/mp',   [MpController::class,   'index'])->name('mp');
Route::get('/dpib', [DpibController::class, 'index'])->name('dpib');
Route::get('/sk',   [SkController::class,   'index'])->name('sk');

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
        Route::resource('fasilitas', FasilitasController::class)
            ->parameters(['fasilitas' => 'fasilitas']);
        Route::resource('agenda', AgendaController::class);
        Route::resource('tenagapengajar', TenagaPengajarController::class);
        Route::resource('staffkependidikan', StaffKependidikanController::class);
        Route::resource('ekstrakulikuler', EkstrakulikulerController::class);
        Route::resource('marketplace', MarketplaceController::class);
    });