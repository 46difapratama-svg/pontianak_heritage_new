<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Foto Galeri - Admin</title>
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
            <a href="/galleries" class="block bg-blue-700 px-4 py-3 rounded-lg font-semibold">Galeri Budaya</a>
            <a href="/events" class="block hover:bg-blue-700 px-4 py-3 rounded-lg">Event Budaya</a>
        </nav>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-8">
        <div class="mb-8">
            <h2 class="text-3xl font-bold text-gray-800">Edit Foto Galeri</h2>
            <p class="text-gray-500">Ubah data dokumentasi visual cagar budaya</p>
        </div>

        <div class="bg-white rounded-2xl shadow-sm border border-gray-200 p-8 max-w-2xl">
            <!-- Form Update menggunakan Route galleries.update dengan method PUT -->
            <form action="{{ route('galleries.update', $gallery->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                @csrf
                @method('PUT')

                <div>
                    <label class="block text-gray-700 font-semibold mb-2">Judul Foto / Kegiatan</label>
                    <input type="text" name="judul" value="{{ $gallery->judul }}" required class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div>
                    <label class="block text-gray-700 font-semibold mb-2">Kategori</label>
                    <input type="text" name="kategori" value="{{ $gallery->kategori }}" required placeholder="Contoh: Kain Corak Insang, Pakaian Adat Dayak, Teluk Belanga"
                        class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div>
                    <label class="block text-gray-700 font-semibold mb-2">Deskripsi Singkat</label>
                    <textarea name="deskripsi" rows="4" class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">{{ $gallery->deskripsi }}</textarea>
                </div>

                <div>
                    <label class="block text-gray-700 font-semibold mb-2">Foto Saat Ini</label>
                    <div class="mb-3 h-40 w-60 bg-gray-100 border rounded-xl overflow-hidden">
                        <img src="{{ asset('storage/' . $gallery->foto) }}" alt="Preview" class="w-full h-full object-cover">
                    </div>
                    <label class="block text-gray-700 font-semibold mb-2">Ganti Foto (Biarkan kosong jika tidak ingin diubah)</label>
                    <input type="file" name="foto" accept="image/*" class="w-full px-4 py-2 rounded-xl border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                </div>

                <div class="flex gap-4 pt-4">
                    <button type="submit" class="bg-blue-700 text-white px-6 py-3 rounded-xl font-medium hover:bg-blue-800 transition shadow">Simpan Perubahan</button>
                    <a href="/galleries" class="bg-gray-100 text-gray-700 px-6 py-3 rounded-xl font-medium hover:bg-gray-200 transition text-center">Batal</a>
                </div>
            </form>
        </div>
    </main>
</div>
</body>
</html>