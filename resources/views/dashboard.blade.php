<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100">

<div class="flex min-h-screen">

    <!-- Sidebar -->
    <aside class="w-64 bg-blue-900 text-white p-6 shadow-2xl">

   <div class="mt-10">
    <a href="/"
       class="flex items-center justify-center gap-2 bg-white text-blue-900 py-3 rounded-xl font-semibold hover:bg-gray-200 transition">
        <span>🏠</span>
        <span>Kembali ke Website</span>
    </a>
</div>

        <h1 class="text-2xl font-bold mb-10 mt-6">
            Pontianak Heritage
        </h1>

        <nav class="space-y-4">

            <a href="/dashboard"
               class="block bg-blue-700 px-4 py-3 rounded-lg">
                Dashboard
            </a>

            <a href="/heritages"
               class="block hover:bg-blue-700 px-4 py-3 rounded-lg">
                Artikel Budaya
            </a>

            <a href="/galleries"
               class="block hover:bg-blue-700 px-4 py-3 rounded-lg">
                Galeri Budaya
            </a>

            <a href="/events" class="block hover:bg-blue-700 px-4 py-3 rounded-lg">
                Event Budaya
            </a>

        </nav>

    </aside>

    <!-- Main -->
    <main class="flex-1 p-8">

        <div class="mb-8">
            <h2 class="text-3xl font-bold text-gray-800">
                Dashboard Admin
            </h2>

            <p class="text-gray-500">
                Selamat datang di sistem Pontianak Heritage Movement
            </p>
        </div>

       <!-- Statistik -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">

            <!-- Total Artikel Budaya -->
            <div class="bg-white p-6 rounded-2xl shadow">
                <h3 class="text-gray-500">Total Artikel Budaya</h3>
                <p class="text-4xl font-bold text-blue-700 mt-4">
                    {{ $totalHeritage }}
                </p>
            </div>

            <!-- Total Galeri -->
            <div class="bg-white p-6 rounded-2xl shadow">
                <h3 class="text-gray-500">Total Galeri</h3>
                <p class="text-4xl font-bold text-green-600 mt-4">
                    {{ $totalGallery }}
                </p>
            </div>

            <!-- Total Event -->
            <div class="bg-white p-6 rounded-2xl shadow">
                <h3 class="text-gray-500">Total Event</h3>
                <p class="text-4xl font-bold text-red-600 mt-4">
                    {{ $totalEvent }}
                </p>
            </div>

        </div>

        <!-- Histori Artikel Budaya (Dengan Scroll Down) -->
        <div class="bg-white rounded-2xl shadow p-6">

            <div class="flex justify-between items-center mb-6">
                <h3 class="text-2xl font-bold text-gray-800">
                    Histori Artikel Budaya
                </h3>
            </div>

            <!-- Wrapper Tabel agar Header Tetap dan Body Bisa di-scroll -->
            <div class="overflow-hidden border border-gray-100 rounded-xl">
                <table class="w-full text-left border-collapse">
                    <thead class="bg-gray-50 border-b border-gray-200">
                        <tr>
                            <th class="py-3 px-4 text-gray-600 font-semibold">Judul</th>
                            <th class="py-3 px-4 text-gray-600 font-semibold">Kategori</th>
                            <th class="py-3 px-4 text-gray-600 font-semibold">Tanggal Masuk</th>
                        </tr>
                    </thead>
                </table>

                <!-- Kontainer Scroll Down (Maksimal tinggi 80/sekitar 320px) -->
                <div class="max-h-80 overflow-y-auto">
                    <table class="w-full text-left border-collapse">
                        <tbody class="divide-y divide-gray-100">
                            {{-- Pastikan di Controller Dashboard Anda mengirim variabel $heritages atau $latestHeritage --}}
                            @forelse($heritages ?? $latestHeritage as $item)
                            <tr class="hover:bg-gray-50 transition">
                                <td class="py-3 px-4 text-gray-800 font-medium">
                                    {{ $item->judul }}
                                </td>
                                <td class="py-3 px-4 text-gray-600">
                                    {{ $item->kategori }}
                                </td>
                                <td class="py-3 px-4 text-gray-500">
                                    {{ $item->created_at->format('d M Y') }}
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="3" class="py-8 text-center text-gray-400">
                                    Belum ada histori artikel budaya yang masuk.
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

        </div>

    </main>

</div>

</body>
</html>