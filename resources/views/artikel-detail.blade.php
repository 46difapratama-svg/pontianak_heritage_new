<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $heritage->judul }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100">

<div class="max-w-5xl mx-auto py-10 px-4 sm:px-6 lg:px-0">

    <div class="mb-6">
        <a href="/" class="inline-flex items-center gap-2 px-5 py-2.5 bg-white border border-gray-200 rounded-xl text-sm font-semibold text-gray-700 hover:bg-gray-50 hover:text-blue-700 transition shadow-sm">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
            </svg>
            Kembali ke Beranda Utama
        </a>
    </div>

    <img src="{{ asset('storage/' . $heritage->gambar) }}"
         class="w-full h-[450px] object-cover rounded-2xl shadow">

    <div class="bg-white p-10 rounded-2xl shadow mt-8">

        <span class="bg-blue-100 text-blue-700 px-4 py-2 rounded-full font-medium text-sm">
            {{ $heritage->kategori }}
        </span>

        <h1 class="text-5xl font-bold mt-6 mb-6 text-gray-900">
            {{ $heritage->judul }}
        </h1>

        <p class="text-gray-700 leading-8 text-lg mb-10">
            {{ $heritage->deskripsi }}
        </p>

        <div class="flex justify-between items-center pt-8 border-t border-gray-100">
            
            @if($previous)
                <a href="/artikel/{{ $previous->id }}" 
                   class="flex items-center gap-2 px-6 py-3 bg-white border border-gray-200 rounded-xl text-base font-semibold text-gray-700 hover:text-blue-700 hover:border-blue-200 hover:bg-blue-50/50 transition group shadow-sm">
                    <svg class="w-5 h-5 transform group-hover:-translate-x-0.5 transition-transform" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"></path>
                    </svg>
                    <span>Sebelumnya</span>
                </a>
            @else
                <div></div> 
            @endif

            @if($next)
                <a href="/artikel/{{ $next->id }}" 
                   class="flex items-center gap-2 px-6 py-3 bg-blue-700 rounded-xl text-base font-semibold text-white hover:bg-blue-800 transition group shadow-sm shadow-blue-700/10">
                    <span>Berikutnya</span>
                    <svg class="w-5 h-5 transform group-hover:translate-x-0.5 transition-transform" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            @else
                <button disabled 
                        class="flex items-center gap-2 px-6 py-3 bg-gray-100 rounded-xl text-base font-semibold text-gray-400 cursor-not-allowed">
                    <span>Artikel Terakhir</span>
                </button>
            @endif

        </div>

    </div>

</div>

</body>
</html>