<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    /**
     * Menampilkan halaman utama event budaya
     */
   public function publicIndex()
    {
        // Mengambil semua data festival budaya
        $events = Event::all(); 
        
        // Mengarah ke file view baru bernama 'festival-budaya.blade.php'
        return view('festival-budaya', compact('events')); 
    }

    public function index()
    {
        // Mengambil semua data event untuk tabel/kartu admin
        $events = Event::all(); 

        // Mengarah langsung ke file resources/views/events.blade.php
        return view('events', compact('events')); 
    }

    /**
     * Menampilkan formulir tambah event
     */
    public function create()
    {
        return view('events-create');
    }

    /**
     * Menyimpan data event baru ke database
     */
    public function store(Request $request)
    {
      $request->validate([
    'nama_event' => 'required|string|max:255',
    'kategori'   => 'required|string|max:255',
    'deskripsi'  => 'required|string', // Pastikan ini required/nullable sesuai keinginan
    'foto'       => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
]);

        $fotoPath = null;
        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('events', 'public');
        }

       Event::create([
    'nama_event' => $request->nama_event,
    'kategori'   => $request->kategori,
    'deskripsi'  => $request->deskripsi, // <-- Pastikan baris ini ada
    'foto'       => $fotoPath,
]);

        return redirect()->route('events.index')->with('success', 'Jadwal event berhasil ditambahkan!');
    }

    /**
     * Menampilkan halaman edit event
     */
    public function edit($id)
    {
        $event = Event::findOrFail($id);
        return view('events-edit', compact('event'));
    }

    /**
     * Memproses pembaruan data event
     */
    public function update(Request $request, $id)
    {
        $event = Event::findOrFail($id);

        $request->validate([
    'nama_event' => 'required|string|max:255',
    'kategori'   => 'required|string|max:255',
    'foto'       => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    'lokasi'     => 'nullable|string|max:255', // diubah jadi nullable
    'tanggal_pelaksanaan' => 'nullable|date', // diubah jadi nullable
    'deskripsi'  => 'nullable|string',
]);
        $fotoPath = $event->foto;

        if ($request->hasFile('foto')) {
            if ($event->foto && Storage::disk('public')->exists($event->foto)) {
                Storage::disk('public')->delete($event->foto);
            }
            $fotoPath = $request->file('foto')->store('events', 'public');
        }

        $event->update([
            'nama_event' => $request->nama_event,
            'lokasi' => $request->lokasi,
            'tanggal_pelaksanaan' => $request->tanggal_pelaksanaan,
            'deskripsi' => $request->deskripsi,
            'foto' => $fotoPath,
        ]);

        return redirect()->route('events.index')->with('success', 'Jadwal event berhasil diperbarui!');
    }

    /**
     * Menghapus data event beserta fotonya
     */
   public function destroy($id)
{
    $event = Event::findOrFail($id);
    $event->delete();

    // Pesan sukses ini akan ditangkap oleh script SweetAlert di view
    return redirect()->route('events.index')->with('success', 'Jadwal event berhasil dihapus!');
}
}