<?php

namespace App\Http\Controllers;

use App\Models\Heritage;
use App\Models\Gallery;  
use App\Models\Event;

class DashboardController extends Controller
{
   public function index()
{
    $totalHeritage = Heritage::count();
    $totalGallery  = Gallery::count();
    $totalEvent    = Event::count();
    
    // Mengambil seluruh data artikel diurutkan dari yang terbaru
    $heritages     = Heritage::latest()->get(); 

    return view('dashboard', compact('totalHeritage', 'totalGallery', 'totalEvent', 'heritages'));
}
}