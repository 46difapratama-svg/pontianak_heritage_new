<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HeritageController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;
use App\Models\Heritage;

/*
|--------------------------------------------------------------------------
| Web Routes - Pontianak Heritage Movement
|--------------------------------------------------------------------------
*/

// Halaman Utama (Beranda) - Sekarang sudah membawa data $heritages dari database
Route::get('/', function () {
    $heritages = Heritage::all();
    return view('home', compact('heritages'));
});

Route::get('/tentang', function () {
    return view('tentang');
});

// Detail Artikel dengan Navigasi Berkelanjutan (Sebelumnya & Berikutnya)
Route::get('/artikel/{id}', function ($id) {
    $heritage = Heritage::findOrFail($id);

    $previous = Heritage::where('id', '<', $id)
                        ->orderBy('id', 'desc')
                        ->first();

    $next = Heritage::where('id', '>', $id)
                    ->orderBy('id', 'asc')
                    ->first();

    return view('artikel-detail', compact('heritage', 'previous', 'next'));
});

// Penyaringan Artikel Berdasarkan Dropdown Kategori
Route::get('/kategori/{nama_kategori}', function ($nama_kategori) {
    $heritages = Heritage::where('kategori', $nama_kategori)->get();
    return view('kategori', compact('heritages', 'nama_kategori'));
});

// Pastikan diletakkan di luar grup middleware 'auth' agar bisa diakses pengunjung umum
Route::get('/galeri-budaya', [\App\Http\Controllers\GalleryController::class, 'publicIndex']);
Route::get('/festival-budaya', [\App\Http\Controllers\EventController::class, 'publicIndex']);

// Group Middleware Autentikasi (Akses Dashboard & Manajemen Cagar Budaya)
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('heritages', HeritageController::class);
    Route::resource('galleries', GalleryController::class);
    Route::resource('events', EventController::class);
});

// Group Middleware Autentikasi (Akses Profil Pengguna)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Memuat Sistem Autentikasi Bawaan Laravel Starter Kit
require __DIR__.'/auth.php';