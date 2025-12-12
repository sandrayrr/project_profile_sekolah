<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.beranda');
})->name('beranda');

Route::get('/profil', function () {
    return view('pages.profil');
})->name('profil');

Route::get('/jurusan', function () {
    return view('pages.jurusan');
})->name('jurusan');

Route::get('/artikel', function () {
    return view('pages.artikel');
})->name('artikel');

Route::get('/galeri', function () {
    return view('pages.galeri');
})->name('galeri');

Route::get('/prestasi', function () {
    return view('pages.pretasi');
})->name('prestasi');

Route::get('/link', function () {
    return view('pages.link');
})->name('link');

Route::get('/fasilitas', function () {
    return view('pages.fasilitas');
})->name('fasilitas');

Route::get('/akreditasi', function () {
    return view('pages.akreditasi');
})->name('akreditasi');

Route::get('/ekstrakurikuler', function () {
    return view('pages.ekstrakurikuler');
})->name('ekstrakurikuler');

Route::get('/agenda', function () {
    return view('pages.agenda');
})->name('agenda');
// Halaman Utama
Route::get('/', function () {
    return view('pages.beranda');
})->name('beranda');

// Halaman Lain
Route::view('/profil', 'pages.profil')->name('profil');
Route::view('/jurusan', 'pages.jurusan')->name('jurusan');
Route::view('/artikel', 'pages.artikel')->name('artikel');
Route::view('/galeri', 'pages.galeri')->name('galeri');
Route::view('/prestasi', 'pages.prestasi')->name('prestasi');
Route::view('/link', 'pages.link')->name('link');
Route::view('/fasilitas', 'pages.fasilitas')->name('fasilitas');
Route::view('/akreditasi', 'pages.akreditasi')->name('akreditasi');
Route::view('/ekstrakulikuler', 'pages.ekstrakulikuler')->name('ekstrakulikuler');
Route::view('/agenda', 'pages.agenda')->name('agenda');

// Login
Route::view('/login', 'pages.login')->name('login');
