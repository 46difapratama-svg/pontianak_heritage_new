<?php

namespace App\Http\Controllers;

use App\Models\Heritage;
use App\Models\Gallery;  
use App\Models\Event;

class DashboardController extends Controller
{
    public function index() 
{
    // Mengambil total jumlah data dari masing-masing tabel
    $totalHeritage = Heritage::count();
    $totalGallery  = Gallery::count();
    $totalEvent    = Event::count();

    // Mengambil data artikel terbaru untuk tabel di bawahnya
    $latestHeritage = Heritage::latest()->take(5)->get();

    // Kirimkan semua variabel ke file view dashboard
    return view('dashboard', compact('totalHeritage', 'totalGallery', 'totalEvent', 'latestHeritage'));
}
}