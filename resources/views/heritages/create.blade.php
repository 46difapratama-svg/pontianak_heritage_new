<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Artikel</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 p-10">

<div class="max-w-3xl mx-auto bg-white p-8 rounded-2xl shadow">

    <h1 class="text-3xl font-bold mb-8">
        Tambah Artikel Budaya
    </h1>

    <form action="/heritages"
          method="POST"
          enctype="multipart/form-data">

        @csrf

        <div class="mb-5">
            <label class="block mb-2 font-semibold">
                Judul
            </label>
            <input type="text"
                   name="judul"
                   class="w-full border rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-500"
                   required>
        </div>

       <div class="mb-5">
            <label class="block mb-2 font-semibold text-gray-800">
                Kategori Heritage
            </label>
            <select name="kategori" 
                    class="w-full border border-gray-200 rounded-lg p-3 bg-white focus:outline-none focus:ring-2 focus:ring-blue-500 text-gray-700"
                    required>
                <option value="" disabled selected>-- Pilih Kategori Heritage --</option>
                
                <option value="Monumen & Landmark Ikonis Kota">🗼 Monumen & Landmark Ikonis Kota</option>
                <option value="Pakaian & Seni Adat">💃 Pakaian & Seni Adat</option>
                <option value="Warisan Sejarah & Kesultanan Kadriyah">👑 Warisan Sejarah & Kesultanan Kadriyah</option>
                <option value="Rumah Tradisional & Permukiman Air (Kawasan Kapuas)">🏡 Rumah Tradisional & Permukiman Air (Kawasan Kapuas)</option>
                <option value="Rumah Ibadah Bersejarah & Simbol Pluralisme">🕌 Rumah Ibadah Bersejarah & Simbol Pluralisme</option>
                <option value="Bangunan Kolonial Belanda & Fasilitas Publik Lama">🏢 Bangunan Kolonial Belanda & Fasilitas Publik Lama</option>
                <option value="Agrowisata & Potensi Daerah">🌴 Agrowisata & Potensi Daerah</option>
            </select>
        </div>

        <div class="mb-5">
            <label class="block mb-2 font-semibold">
                Deskripsi
            </label>
            <textarea name="deskripsi"
                      rows="6"
                      class="w-full border rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-500"
                      required></textarea>
        </div>

        <div class="mb-5">
            <label class="block mb-2 font-semibold">
                Gambar Budaya
            </label>
            <input type="file"
                   name="gambar"
                   onchange="previewImage(event)"
                   class="w-full border rounded-lg p-3"
                   required>
            
            <div class="mt-3">
                <img id="preview" src="#" alt="Preview Gambar" class="hidden max-h-48 rounded-lg shadow-md object-cover">
            </div>
        </div>

        <div class="flex items-center gap-4 pt-4 border-t border-gray-100">
            <a href="/dashboard" 
               class="bg-gray-500 text-white px-6 py-3 rounded-lg hover:bg-gray-600 transition font-semibold flex items-center gap-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
                Kembali
            </a>

            <button type="submit" 
                    class="bg-blue-700 text-white px-6 py-3 rounded-lg hover:bg-blue-800 transition font-semibold">
                Simpan Artikel
            </button>
        </div>

    </form>

</div>

<script>
function previewImage(event)
{
    const preview = document.getElementById('preview');
    preview.src = URL.createObjectURL(event.target.files[0]);
    preview.classList.remove('hidden');
}
</script>
</body>
</html>