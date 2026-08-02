<?php

namespace App\Http\Controllers;

use App\Models\Gallery; 
use Illuminate\Http\Request;

class GalleryController extends Controller
{
   public function publicIndex()
    {
        // Mengambil semua data galeri pakaian adat
        $galleries = Gallery::all(); 
        
        // Mengarah ke file view baru bernama 'pakaian-adat.blade.php'
        return view('galleries-budaya', compact('galleries')); 
    }

    public function index()
    {
        // Mengambil semua data galeri untuk tabel admin
        $galleries = Gallery::all(); 

        // Mengarah ke file tampilan dashboard admin Anda
        return view('galleries', compact('galleries'));
    }

    public function create()
    {
        return view('galleries-create'); 
    }

    /**
     * PERBAIKAN: Menyimpan data galeri baru ke database
     */
    public function store(Request $request)
    {
        // 1. Validasi input form
        $request->validate([
    'judul'     => 'required|string|max:255',
    'kategori'  => 'required|string|max:255', // Cukup validasi string biasa
    'deskripsi' => 'nullable|string',
    'foto'      => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
]);

        // 2. Proses upload file foto
        if ($request->hasFile('foto')) {
            // Foto akan disimpan di folder: storage/app/public/galleries
            $fotoPath = $request->file('foto')->store('galleries', 'public');
        }

        // 3. Simpan data ke database melalui Model Gallery
        Gallery::create([
            'judul' => $request->judul,
            'kategori' => $request->kategori,
            'deskripsi' => $request->deskripsi,
            'foto' => $fotoPath, // Menyimpan path file gambar
        ]);

        // 4. Redirect kembali ke halaman utama galeri dengan pesan sukses
        return redirect()->route('galleries.index')->with('success', 'Foto galeri berhasil ditambahkan!');
    }

    /**
     * Menampilkan formulir edit data berdasarkan ID
     */
    public function edit($id)
    {
        // Cari data galeri berdasarkan ID, jika tidak ketemu akan otomatis error 404
        $gallery = Gallery::findOrFail($id);
        
        // Membuka file view 'galleries-edit' dan mengirim data galeri yang mau diubah
        return view('galleries-edit', compact('gallery'));
    }

    /**
     * Memproses pembaruan data yang dikirim dari formulir edit
     */
    public function update(Request $request, $id)
    {
        $gallery = Gallery::findOrFail($id);

        // 1. Validasi input form (foto bersifat opsional saat edit)
        $request->validate([
    'judul'     => 'required|string|max:255',
    'kategori'  => 'required|string|max:255', // Cukup validasi string biasa
    'deskripsi' => 'nullable|string',
    'foto'      => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
]);

        // 2. Ambil path foto yang lama sebagai nilai default
        $fotoPath = $gallery->foto;

        // 3. Jika admin mengunggah foto baru, ganti foto yang lama
        if ($request->hasFile('foto')) {
            // Hapus foto lama dari storage jika filenya ada (opsional untuk menghemat storage)
            if ($gallery->foto && \Storage::disk('public')->exists($gallery->foto)) {
                \Storage::disk('public')->delete($gallery->foto);
            }
            // Simpan foto baru
            $fotoPath = $request->file('foto')->store('galleries', 'public');
        }

        // 4. Perbarui data di database
        $gallery->update([
            'judul' => $request->judul,
            'kategori' => $request->kategori,
            'deskripsi' => $request->deskripsi,
            'foto' => $fotoPath,
        ]);

        return redirect()->route('galleries.index')->with('success', 'Foto galeri berhasil diperbarui!');
    }

   public function destroy($id)
{
    $gallery = Gallery::findOrFail($id);
    $gallery->delete();

    // Kirim pesan sukses ke session
    return redirect()->route('galleries.index')->with('success', 'Foto berhasil dihapus!');
}

public function show($id)
    {
        // Mencari data berdasarkan ID, jika tidak ketemu akan otomatis memunculkan halaman 404
        $item = Gallery::findOrFail($id);

        // Mengarahkan ke file view detail yang baru saja dibuat
        return view('galleries-detail', compact('item'));
    }
}