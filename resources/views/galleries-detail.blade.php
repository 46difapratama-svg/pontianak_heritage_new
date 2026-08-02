<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $item->judul }} - Pontianak Heritage</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 text-gray-800">

    <!-- Header / Navbar -->
    <header class="bg-white shadow-sm sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <!-- Tombol Kembali -->
            <a href="/galeri-budaya" class="text-blue-600 hover:text-blue-800 font-semibold flex items-center gap-2 transition">
                <span>←</span>
                <span>Kembali ke Galeri</span>
            </a>
            
            <nav class="flex items-center gap-6">
                <a href="/" class="text-gray-600 hover:text-blue-600 font-medium transition duration-200">Home</a>
                <a href="/galeri-budaya" class="text-blue-600 font-semibold transition duration-200">Galeri Budaya</a>
                <a href="/festival-budaya" class="text-gray-600 hover:text-blue-600 font-medium transition duration-200">Event & Festival</a>
            </nav>
        </div>
    </header>

    <!-- Main Content Detail -->
    <main class="max-w-4xl mx-auto px-6 py-12">
        <article class="bg-white rounded-3xl shadow-sm border border-gray-200 overflow-hidden p-8 md:p-12">
            
            <!-- Kategori & Judul -->
            <div class="mb-6">
                <span class="inline-block bg-blue-50 text-blue-700 text-xs px-3.5 py-1.5 rounded-full font-semibold mb-4">
                    {{ $item->kategori }}
                </span>
                <h1 class="text-3xl md:text-4xl font-extrabold text-gray-900 tracking-tight">
                    {{ $item->judul }}
                </h1>
                <p class="text-gray-400 text-sm mt-2">
                    Diunggah pada {{ $item->created_at->format('d M Y') }}
                </p>
            </div>

            <!-- Gambar Utama -->
            <div class="mb-8 rounded-2xl overflow-hidden shadow-md bg-gray-100 max-h-[500px]">
                <img src="{{ asset('storage/' . $item->foto) }}" alt="{{ $item->judul }}" class="w-full h-full object-cover">
            </div>

          <!-- Deskripsi Lengkap -->
            <div class="prose max-w-none text-gray-700 leading-relaxed text-base md:text-lg space-y-4 break-words overflow-hidden">
                {!! nl2br(e($item->deskripsi)) !!}
            </div>

        </article>
    </main>

</body>
</html>