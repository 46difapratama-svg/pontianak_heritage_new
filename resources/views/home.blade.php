<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pontianak Heritage Movement</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>

<body class="bg-gray-100 text-gray-800 antialiased">

<nav class="bg-white shadow fixed w-full top-0 left-0 z-50">
    <div class="max-w-7xl mx-auto px-8 py-4 flex justify-between items-center">

        <a href="/" class="flex items-center gap-4">
            <img src="{{ asset('images/Logo Kota Pontianak.png') }}" 
                 alt="Logo Kota Pontianak" 
                 class="h-12 w-auto object-contain">
            <img src="{{ asset('images/LogoPontianakHeritage.png') }}" 
                 alt="Logo Pontianak Heritage" 
                 class="h-12 w-auto object-contain">
        </a>

        <div class="flex gap-8 items-center">
            <a href="/" class="text-blue-700 font-bold text-sm">
                Home
            </a>

            <a href="/tentang" class="text-gray-600 hover:text-blue-700 font-semibold text-sm transition">
                Tentang
            </a>

            <div class="relative" x-data="{ open: false }" @click.away="open = false">
                <button @click="open = !open" class="flex items-center gap-1 text-gray-600 hover:text-blue-700 font-semibold text-sm focus:outline-none">
                    <span>Daftar Heritage</span>
                    <svg class="w-4 h-4 transform transition-transform duration-200" :class="{'rotate-180': open}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>

                <div x-show="open" 
                     x-transition:enter="transition ease-out duration-100"
                     x-transition:enter-start="transform opacity-0 scale-95"
                     x-transition:enter-end="transform opacity-100 scale-100"
                     x-transition:leave="transition ease-in duration-75"
                     x-transition:leave-start="transform opacity-100 scale-100"
                     x-transition:leave-end="transform opacity-0 scale-95"
                     class="absolute left-0 top-full mt-3 w-80 bg-white border border-gray-100 rounded-2xl shadow-xl py-2 z-50"
                     style="display: none;">
                    
                    <a href="/kategori/Monumen & Landmark Ikonis Kota" class="block px-4 py-2.5 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-700 transition flex items-center gap-2">
                        <span>🗼</span> Monumen & Landmark Ikonis Kota
                    </a>
                    <a href="/kategori/Warisan Sejarah & Kesultanan Kadriyah" class="block px-4 py-2.5 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-700 transition flex items-center gap-2">
                        <span>👑</span> Warisan Sejarah & Kesultanan Kadriyah
                    </a>
                    <a href="/kategori/Rumah Tradisional & Permukiman Air (Kawasan Kapuas)" class="block px-4 py-2.5 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-700 transition flex items-center gap-2">
                        <span>🏡</span> Rumah Tradisional & Permukiman Air (Kawasan Kapuas)
                    </a>
                    <a href="/kategori/Rumah Ibadah Bersejarah & Simbol Pluralisme" class="block px-4 py-2.5 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-700 transition flex items-center gap-2">
                        <span>🕌</span> Rumah Ibadah Bersejarah & Simbol Pluralisme
                    </a>
                    <a href="/kategori/Bangunan Kolonial Belanda & Fasilitas Publik Lama" class="block px-4 py-2.5 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-700 transition flex items-center gap-2">
                        <span>🏢</span> Bangunan Kolonial Belanda & Fasilitas Publik Lama
                    </a>
                    <a href="/kategori/Agrowisata & Potensi Daerah" class="block px-4 py-2.5 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-700 transition flex items-center gap-2">
                        <span>🌴</span> Agrowisata & Potensi Daerah
                    </a>
                </div>
            </div>

            <!-- Dropdown 2: Eksplorasi Budaya (SUDAH DISAMAKAN) -->
            <div class="relative" x-data="{ open: false }" @click.away="open = false">
                <!-- Button Style disamakan (font-semibold, text-sm, hover:text-blue-700) -->
                <button @click="open = !open" 
                        class="flex items-center gap-1 text-gray-600 hover:text-blue-700 font-semibold text-sm transition focus:outline-none">
                    <span>Eksplorasi Budaya</span>
                    <!-- SVG Chevron disamakan menggunakan class Tailwind yang identik -->
                    <svg class="w-4 h-4 transform transition-transform duration-200" :class="{'rotate-180': open}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>

                <!-- Container Dropdown disamakan (top-full mt-3, rounded-2xl, hover text-blue-700) -->
                <div x-show="open" 
                     x-transition:enter="transition ease-out duration-100"
                     x-transition:enter-start="transform opacity-0 scale-95"
                     x-transition:enter-end="transform opacity-100 scale-100"
                     x-transition:leave="transition ease-in duration-75"
                     x-transition:leave-start="transform opacity-100 scale-100"
                     x-transition:leave-end="transform opacity-0 scale-95"
                     class="absolute left-0 top-full mt-3 w-56 bg-white border border-gray-100 rounded-2xl shadow-xl py-2 z-50"
                     style="display: none;">
                    
                    <a href="/galeri-budaya" class="px-4 py-2.5 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-700 transition flex items-center gap-2">
                        <span>🖼️</span> Galeri Budaya
                    </a>

                    <a href="/festival-budaya" class="px-4 py-2.5 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-700 transition flex items-center gap-2">
                        <span>🎉</span> Event & Festival
                    </a>
                </div>
            </div>

            <a href="#lokasi" class="text-gray-600 hover:text-blue-700 font-semibold text-sm transition flex items-center gap-1">
                <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                </svg>
                <span>Kontak</span>
            </a>

            <a href="/login" class="bg-blue-600 text-white px-6 py-2.5 rounded-xl font-bold text-sm hover:bg-blue-700 transition shadow-sm">
                Login 
            </a>
        </div>
    </div>
</nav>

<section class="relative h-screen flex items-center bg-cover bg-center bg-no-repeat overflow-hidden pt-20" 
         style="background-image: url('{{ asset('images/bg-masthead.jpg') }}');">
    
    <div class="absolute inset-0 bg-blue-950/80 backdrop-blur-[2px]"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-8 w-full grid md:grid-cols-2 gap-12 items-center">
        <div>
            <h1 class="text-6xl font-black leading-tight mb-6 text-white drop-shadow-md">
                Jejak Warisan <br><span class="text-blue-400">Pontianak</span>
            </h1>
            <p class="text-xl text-blue-100 leading-9 drop-shadow">
               Menyajikan dokumentasi sejarah, bangunan bersejarah, dan nilai budaya Kota Pontianak yang diwariskan lintas generasi.
            </p>
            <a href="#artikel" class="inline-block mt-8 bg-white text-blue-950 px-8 py-4 rounded-xl font-bold hover:bg-gray-100 transition shadow-lg">
                Jelajahi Budaya
            </a>
        </div>

        <div class="hidden md:grid grid-cols-2 gap-6 justify-center items-center max-w-md mx-auto">
            <div class="aspect-square rounded-full overflow-hidden border-4 border-white/20 shadow-2xl transform hover:scale-105 transition duration-300">
                <img src="{{ asset('images/MasjidSultan.jpg') }}" class="w-full h-full object-cover" alt="Warisan Pontianak 1">
            </div>
            <div class="aspect-square rounded-full overflow-hidden border-4 border-white/20 shadow-2xl transform hover:scale-105 transition duration-300">
                <img src="{{ asset('images/cover pakai dayak.jpg') }}" class="w-full h-full object-cover" alt="Warisan Pontianak 2">
            </div>
            <div class="aspect-square rounded-full overflow-hidden border-4 border-white/20 shadow-2xl transform hover:scale-105 transition duration-300">
                <img src="{{ asset('images/Bejepin.jpg') }}" class="w-full h-full object-cover" alt="Warisan Pontianak 3">
            </div>
            <div class="aspect-square rounded-full overflow-hidden border-4 border-white/20 shadow-2xl transform hover:scale-105 transition duration-300">
                <img src="{{ asset('images/Meriam.jpeg') }}" class="w-full h-full object-cover" alt="Warisan Pontianak 4">
            </div>
        </div>
    </div>
</section>

<section id="artikel" class="py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-8">
        
        <div class="mb-16 text-center">
            <h2 class="text-5xl font-black text-gray-950">Koleksi Cagar Budaya</h2>
            <div class="h-1 w-20 bg-blue-700 mx-auto mt-4 rounded-full"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($heritages as $item)
                <div class="bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden flex flex-col h-full hover:shadow-xl transition duration-300">
                    <img src="{{ asset('storage/' . $item->gambar) }}" class="h-64 w-full object-cover">
                    <div class="p-6 flex flex-col flex-grow">
                        <div>
                            <span class="bg-blue-50 text-blue-700 px-3 py-1.5 rounded-full text-xs font-bold inline-block">
                                {{ $item->kategori }}
                            </span>
                        </div>
                        <h3 class="text-2xl font-bold mt-5 mb-3 text-gray-900 tracking-tight line-clamp-1">
                            {{ $item->judul }}
                        </h3>
                        <p class="text-gray-600 text-sm leading-relaxed mb-6 line-clamp-3 flex-grow">
                            {{ $item->deskripsi }}
                        </p>
                        <div class="pt-4 border-t border-gray-50 mt-auto">
                            <a href="/artikel/{{ $item->id }}" class="text-blue-600 font-bold text-sm inline-flex items-center gap-1 hover:text-blue-800 transition">
                                <span>Baca Selengkapnya</span> <span>→</span>
                            </a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-span-full bg-white border border-dashed border-gray-200 p-16 rounded-3xl text-center">
                    <p class="text-gray-400 text-lg font-medium">Belum ada artikel cagar budaya yang diunggah.</p>
                </div>
            @endforelse
        </div>

    </div>
</section>

<section id="lokasi" class="bg-white py-24 border-t border-gray-200 scroll-mt-20">
    <div class="max-w-7xl mx-auto px-8">
        
        <div class="text-center mb-16">
            <h2 class="text-5xl font-bold text-gray-900 mb-4">Hubungi Kontak & Lokasi Kami</h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">Jika Anda memiliki pertanyaan, saran, atau referensi mengenai objek cagar budaya baru di Kota Pontianak, silakan hubungi tim kami.</p>
        </div>

        <div class="grid md:grid-cols-2 gap-12 items-stretch">
            <div class="bg-gray-50 p-8 md:p-10 rounded-3xl border border-gray-100 flex flex-col justify-between space-y-8 shadow-sm">
                <div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4 flex items-center gap-2">
                        📍 Alamat Sekretariat
                    </h3>
                    <p class="text-gray-600 leading-relaxed text-base">
                        Jl. Zainuddin No.5, Pontianak Kota,<br>
                        Kalimantan Barat 78111<br>
                        <span class="text-xs text-gray-400 font-medium block mt-2">(Kawasan Kantor Wali Kota / Depan Alun-Alun Kapuas Pontianak)</span>
                    </p>
                </div>
                <hr class="border-gray-200">
                <div class="grid sm:grid-cols-2 gap-6">
                    <div>
                        <h4 class="text-xs font-bold text-gray-400 uppercase tracking-wider">Email Resmi</h4>
                        <p class="text-blue-700 font-semibold mt-1 text-base break-words">hubungi@pontianakheritage.id</p>
                    </div>
                    <div>
                        <h4 class="text-xs font-bold text-gray-400 uppercase tracking-wider">Nomor Telepon</h4>
                        <p class="text-gray-800 font-semibold mt-1 text-base">(0561) 888888</p>
                    </div>
                </div>
                <hr class="border-gray-200">
            </div>

            <div class="w-full min-h-[400px] rounded-3xl overflow-hidden border border-gray-200 shadow-md">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.817943542261!2d109.33405787585098!3d-0.02409743552906168!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e1d59bc4f3d1797%3A0xc3fecdb405da02bb!2sTaman%20Alun%20Kapuas!5e0!3m2!1sid!2sid!4v1716300000000!5m2!1sid!2sid" 
                    class="w-full h-full border-0" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>

    </div>
</section>

<nav class="bg-gray-900 text-gray-500 text-center py-8 text-sm border-t border-gray-800">
    © 2026 Pontianak Heritage Movement. All rights reserved.
</nav>

</body>
</html>