<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event & Festival Budaya - Pontianak Heritage</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 text-gray-800">

   <!-- Navbar -->
<header class="bg-white shadow-sm sticky top-0 z-50">
    <!-- Mengganti justify-between menjadi justify-end agar menu terdorong ke kanan -->
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-end items-center">
        
        <!-- Menu Navigasi -->
        <nav class="flex items-center gap-6">
            <a href="/" class="text-gray-600 hover:text-blue-600 font-medium transition duration-200">
                Home
            </a>
            
            <a href="/#tentang" class="text-gray-600 hover:text-blue-600 font-medium transition duration-200">
                Tentang
            </a>
            
            <a href="/galeri-budaya" class="text-gray-600 hover:text-blue-600 font-medium transition duration-200">
                Galeri Budaya
            </a>
            
            <a href="/festival-budaya" class="text-blue-600 font-semibold transition duration-200">
                Event & Festival
            </a>
        </nav>

    </div>
</header>

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto px-6 py-12">
        <div class="text-center max-w-2xl mx-auto mb-12">
            <h1 class="text-4xl font-extrabold text-gray-900 tracking-tight mb-3">Event & Festival Budaya</h1>
            <p class="text-gray-600 text-lg">Kalender perayaan berkala, eksibisi seni tradisional, dan kemeriahan festival tahunan masyarakat Pontianak.</p>
        </div>

        <!-- Grid Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($events as $item)
                <div class="bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition-shadow duration-300 border border-gray-100 flex flex-col">
                    <div class="relative h-64 bg-gray-100">
                        <img src="{{ asset('storage/' . $item->foto) }}" alt="{{ $item->nama_event }}" class="w-full h-full object-cover">
                        <span class="absolute top-3 right-3 bg-red-600 text-white text-xs px-3 py-1.5 rounded-full font-semibold shadow">
                            {{ $item->kategori }}
                        </span>
                    </div>
                    <div class="p-6 flex-1 flex flex-col justify-between">
                        <div>
                            <h3 class="font-bold text-gray-900 text-xl mb-2 line-clamp-1">{{ $item->nama_event }}</h3>
                            <p class="text-gray-600 text-sm leading-relaxed line-clamp-4">{{ $item->deskripsi }}</p>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-span-full bg-white rounded-2xl p-16 text-center border border-dashed border-gray-200">
                    <span class="text-4xl">🎉</span>
                    <p class="text-gray-500 mt-4 text-lg font-medium">Belum ada jadwal festival budaya terdekat dalam waktu dekat.</p>
                </div>
            @endforelse
        </div>
    </main>

</body>
</html>