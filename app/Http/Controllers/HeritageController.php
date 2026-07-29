<?php

namespace App\Http\Controllers;

use App\Models\Heritage;
use Illuminate\Http\Request;

class HeritageController extends Controller
{
    public function index()
    {
        $heritages = Heritage::latest()->get();

        return view('heritages.index', compact('heritages'));
    }

    public function create()
    {
        return view('heritages.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'kategori' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $gambar = null;

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar')
                ->store('heritages', 'public');
        }

        Heritage::create([
            'judul' => $request->judul,
            'kategori' => $request->kategori,
            'deskripsi' => $request->deskripsi,
            'gambar' => $gambar,
        ]);

        return redirect('/heritages')
            ->with('success', 'Artikel budaya berhasil ditambahkan');
    }

    public function edit(Heritage $heritage)
    {
        return view('heritages.edit', compact('heritage'));
    }

    public function update(Request $request, Heritage $heritage)
    {
        $request->validate([
            'judul' => 'required',
            'kategori' => 'required',
            'deskripsi' => 'required',
        ]);

        $data = [
            'judul' => $request->judul,
            'kategori' => $request->kategori,
            'deskripsi' => $request->deskripsi,
        ];

        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')
                ->store('heritages', 'public');
        }

        $heritage->update($data);

        return redirect('/heritages')
            ->with('success', 'Artikel berhasil diupdate');
    }

    public function destroy(Heritage $heritage)
    {
        $heritage->delete();

        return redirect('/heritages')
            ->with('success', 'Artikel berhasil dihapus');
    }
}