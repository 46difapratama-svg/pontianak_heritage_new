<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri Budaya - Pontianak Heritage</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 text-gray-800">

    <!-- Header / Navbar -->
<header class="bg-white shadow-sm sticky top-0 z-50">
    <!-- Mengganti justify-between menjadi justify-end agar menu bergeser ke kanan -->
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-end items-center">
        
        <!-- Menu Navigasi -->
        <nav class="flex items-center gap-6">
            <a href="/" class="text-gray-600 hover:text-blue-600 font-medium transition duration-200">
                Home
            </a>
            
            <a href="/#tentang" class="text-gray-600 hover:text-blue-600 font-medium transition duration-200">
                Tentang
            </a>
            
            <!-- Link Aktif Halaman Ini (Galeri Budaya) -->
            <a href="/galeri-budaya" class="text-blue-600 font-semibold transition duration-200">
                Galeri Budaya
            </a>
            
            <a href="/festival-budaya" class="text-gray-600 hover:text-blue-600 font-medium transition duration-200">
                Event & Festival
            </a>
        </nav>

    </div>
</header>

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto px-6 py-12">
        <!-- Header Konten Diubah Menjadi Umum -->
        <div class="text-center max-w-2xl mx-auto mb-12">
            <h1 class="text-4xl font-extrabold text-gray-900 tracking-tight mb-3">Galeri Warisan Budaya</h1>
            <p class="text-gray-600 text-lg">Menjelajahi dokumentasi visual keindahan ragam busana, arsitektur, benda pusaka, dan kesenian tradisional khas Kota Pontianak.</p>
        </div>

        <!-- Grid Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($galleries as $item)
                <div class="bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition-shadow duration-300 border border-gray-100 flex flex-col">
                    <div class="relative h-64 bg-gray-100">
                        <img src="{{ asset('storage/' . $item->foto) }}" alt="{{ $item->judul }}" class="w-full h-full object-cover">
                        <span class="absolute bottom-3 left-3 bg-blue-600 text-white text-xs px-3 py-1.5 rounded-full font-semibold shadow">
                            {{ $item->kategori }}
                        </span>
                    </div>
                    <div class="p-6 flex-1 flex flex-col justify-between">
                        <div>
                            <h3 class="font-bold text-gray-900 text-xl mb-2 line-clamp-1">{{ $item->judul }}</h3>
                            <p class="text-gray-600 text-sm leading-relaxed line-clamp-3">{{ $item->deskripsi }}</p>
                        </div>
                    </div>
                </div>
            @empty
                <!-- Teks Kondisi Kosong Diubah Menjadi Lebih Umum -->
                <div class="col-span-full bg-white rounded-2xl p-16 text-center border border-dashed border-gray-200">
                    <span class="text-4xl">🖼️</span>
                    <p class="text-gray-500 mt-4 text-lg font-medium">Belum ada dokumentasi cagar budaya yang diunggah.</p>
                </div>
            @endforelse
        </div>
    </main>

</body>
</html>