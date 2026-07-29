<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kategori: {{ $nama_kategori }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50">

    <div class="max-w-7xl mx-auto px-4 py-12">
        
        <a href="/" class="inline-flex items-center gap-2 text-blue-700 font-semibold mb-6 hover:underline">
            ← Kembali ke Beranda Utama
        </a>

        <div class="mb-10">
            <p class="text-gray-500 text-sm uppercase tracking-wider font-semibold">Menampilkan Kategori</p>
            <h1 class="text-4xl font-bold text-gray-900 mt-1">{{ $nama_kategori }}</h1>
            <div class="h-1 w-20 bg-blue-700 mt-4 rounded-full"></div>
        </div>

        @if($heritages->isEmpty())
            <div class="bg-white p-12 text-center rounded-2xl shadow-sm border border-gray-100">
                <p class="text-gray-500 text-lg">Belum ada artikel budaya untuk kategori ini.</p>
            </div>
        @else
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($heritages as $item)
                    <div class="bg-white rounded-2xl overflow-hidden shadow-sm border border-gray-100 hover:shadow-md transition">
                        <img src="{{ asset('storage/' . $item->gambar) }}" class="w-full h-56 object-cover">
                        
                        <div class="p-6">
                            <span class="text-xs font-semibold bg-blue-50 text-blue-700 px-3 py-1.5 rounded-full">
                                {{ $item->kategori }}
                            </span>
                            <h3 class="text-xl font-bold text-gray-900 mt-4 mb-2">{{ $item->judul }}</h3>
                            <p class="text-gray-600 text-sm line-clamp-2 mb-4">{{ $item->deskripsi }}</p>
                            
                            <a href="/artikel/{{ $item->id }}" class="text-blue-700 font-semibold text-sm hover:underline flex items-center gap-1">
                                Baca Selengkapnya →
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif

    </div>

</body>
</html>