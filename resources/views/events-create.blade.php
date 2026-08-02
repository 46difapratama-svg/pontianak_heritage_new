<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Jadwal Event - Admin</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">

<div class="flex min-h-screen">

    <!-- Sidebar -->
    <aside class="w-64 bg-blue-900 text-white p-6 shadow-2xl">
        <div class="mt-10">
            <a href="/" class="flex items-center justify-center gap-2 bg-white text-blue-900 py-3 rounded-xl font-semibold hover:bg-gray-200 transition">
                <span>🏠</span> <span>Kembali ke Website</span>
            </a>
        </div>
        <h1 class="text-2xl font-bold mb-10 mt-6">Pontianak Heritage</h1>
        <nav class="space-y-4">
            <a href="/dashboard" class="block hover:bg-blue-700 px-4 py-3 rounded-lg">Dashboard</a>
            <a href="/heritages" class="block hover:bg-blue-700 px-4 py-3 rounded-lg">Artikel Budaya</a>
            <a href="/galleries" class="block hover:bg-blue-700 px-4 py-3 rounded-lg">Galeri Budaya</a>
            <a href="/events" class="block bg-blue-700 px-4 py-3 rounded-lg font-semibold">Event Budaya</a>
        </nav>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-8">
        
        <div class="mb-8">
            <h2 class="text-3xl font-bold text-gray-800">Tambah Jadwal Event</h2>
            <p class="text-gray-500">Agendakan eksibisi atau kompetisi Meriam Karbit baru di sepanjang Sungai Kapuas</p>
        </div>

      <div class="bg-white rounded-2xl shadow-sm border border-gray-200 p-8 max-w-2xl">
            <form action="{{ route('events.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                @csrf

              <!-- Nama Event -->
                <!-- Nama Event / Festival -->
                <div>
                    <label class="block text-gray-700 font-semibold mb-2">Nama Event / Festival <span class="text-red-500">*</span></label>
                    <input type="text" name="nama_event" required value="{{ old('nama_event') }}" placeholder="Contoh: Perayaan Cap Go Meh Pontianak"
                        class="w-full px-4 py-3 rounded-xl border @error('nama_event') border-red-500 bg-red-50 text-red-900 @else border-gray-300 @enderror focus:outline-none focus:ring-2 focus:ring-blue-500">
                    @error('nama_event')
                        <p class="text-red-500 text-xs mt-1 italic">⚠️ Nama event / festival wajib diisi.</p>
                    @enderror
                </div>

                <!-- Kategori Festival -->
                <div>
                    <label class="block text-gray-700 font-semibold mb-2">Kategori Festival <span class="text-red-500">*</span></label>
                    <input type="text" name="kategori" required value="{{ old('kategori') }}" placeholder
                        class="w-full px-4 py-3 rounded-xl border @error('kategori') border-red-500 bg-red-50 text-red-900 @else border-gray-300 @enderror focus:outline-none focus:ring-2 focus:ring-blue-500">
                    @error('kategori')
                        <p class="text-red-500 text-xs mt-1 italic">⚠️ Kategori festival wajib diisi.</p>
                    @enderror
                </div>

                <!-- Deskripsi Festival -->
                <div>
                    <label class="block text-gray-700 font-semibold mb-2">Deskripsi Festival <span class="text-red-500">*</span></label>
                    <textarea name="deskripsi" rows="4" required placeholder="Tuliskan detail atau keterangan mengenai festival ini..."
                            class="w-full px-4 py-3 rounded-xl border @error('deskripsi') border-red-500 bg-red-50 text-red-900 @else border-gray-300 @enderror focus:outline-none focus:ring-2 focus:ring-blue-500">{{ old('deskripsi') }}</textarea>
                    @error('deskripsi')
                        <p class="text-red-500 text-xs mt-1 italic">⚠️ Deskripsi festival wajib diisi.</p>
                    @enderror
                </div>

                <!-- Unggah Brosur/Foto Dokumentasi -->
              <div>
                <label class="block text-gray-700 font-semibold mb-2">Poster / Foto Banner Event</label>
                <input type="file" name="foto" required accept="image/*"
                    class="w-full px-4 py-2 rounded-xl border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
            </div>

                <!-- Tombol Submit -->
                <div class="flex gap-4 pt-4">
                   <button type="submit" class="bg-blue-700 text-white px-6 py-3 rounded-xl font-medium hover:bg-blue-800 transition shadow">
                        Simpan 
                    </button>
                    <a href="/events" class="bg-gray-100 text-gray-700 px-6 py-3 rounded-xl font-medium hover:bg-gray-200 transition text-center">
                        Batal
                    </a>
                </div>

            </form>
        </div>

    </main>
</div>

</body>
</html>