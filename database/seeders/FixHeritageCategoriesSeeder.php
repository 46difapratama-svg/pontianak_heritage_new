<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FixHeritageCategoriesSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Mengubah teks "Monumen & Landmark Ikonis Kota" menjadi "sejarah-bangunan"
        DB::table('heritages')
            ->where('kategori', 'sejarah-bangunan')
            ->update(['kategori' => 'Monumen & Landmark Ikonis Kota']);

        // 2. Mengubah teks "Pakaian & Seni Adat" menjadi "seni-pakaian"
        DB::table('heritages')
            ->where('kategori', 'seni-pakaian')
            ->update(['kategori' => 'Pakaian & Seni Adat']);

        // 3. Mengubah teks "Warisan Sejarah & Kesultanan Kadriyah" menjadi "festival-budaya"
        DB::table('heritages')
            ->where('kategori', 'festival-budaya')
            ->update(['kategori' => 'Warisan Sejarah & Kesultanan Kadriyah']);

        // 4. Mengubah teks "Rumah Tradisional & Permukiman Air (Kawasan Kapuas)" menjadi "permukiman-kapuas"
        DB::table('heritages')
            ->where('kategori', 'permukiman-kapuas')
            ->update(['kategori' => 'Rumah Tradisional & Permukiman Air (Kawasan Kapuas)']);

        // 5. Mengubah teks "Rumah Ibadah Bersejarah & Simbol Pluralisme" menjadi "rumah-ibadah"
        DB::table('heritages')
            ->where('kategori', 'rumah-ibadah')
            ->update(['kategori' => 'Rumah Ibadah Bersejarah & Simbol Pluralisme']);

        // 6. Mengubah teks "Bangunan Kolonial Belanda & Fasilitas Publik Lama" menjadi "bangunan-kolonial"
        DB::table('heritages')
            ->where('kategori', 'bangunan-kolonial')
            ->update(['kategori' => 'Bangunan Kolonial Belanda & Fasilitas Publik Lama']);

        // 7. Mengubah teks "Agrowisata & Potensi Daerah" menjadi "agrowisata"
        DB::table('heritages')
            ->where('kategori', 'agrowisata')
            ->update(['kategori' => 'Agrowisata & Potensi Daerah']);

        $this->command->info('Semua data kategori lama berhasil diselaraskan secara otomatis!');
    }
}