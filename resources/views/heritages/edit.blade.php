<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Artikel</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 p-10">

<div class="max-w-3xl mx-auto bg-white p-8 rounded-2xl shadow">

    <h1 class="text-3xl font-bold mb-8">
        Edit Artikel Budaya
    </h1>

    <form action="/heritages/{{ $heritage->id }}"
          method="POST"
          enctype="multipart/form-data">

        @csrf
        @method('PUT')

        <div class="mb-5">
            <label class="block mb-2 font-semibold">
                Judul
            </label>
            <input type="text"
                   name="judul"
                   value="{{ $heritage->judul }}"
                   class="w-full border rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-500"
                   required>
        </div>

        <div class="mb-5">
            <label class="block mb-2 font-semibold">
                Kategori
            </label>
            <select name="kategori" 
                    class="w-full border rounded-lg p-3 bg-white focus:outline-none focus:ring-2 focus:ring-blue-500 text-gray-700"
                    required>
                <option value="" disabled>-- Pilih Kategori Heritage --</option>
                <option value="sejarah-bangunan" {{ $heritage->kategori == 'sejarah-bangunan' ? 'selected' : '' }}>🗼 Monumen & Landmark Ikonis Kota</option>
                <option value="seni-pakaian" {{ $heritage->kategori == 'seni-pakaian' ? 'selected' : '' }}>💃 Pakaian & Seni Adat</option>
                <option value="festival-budaya" {{ $heritage->kategori == 'festival-budaya' ? 'selected' : '' }}>👑 Warisan Sejarah & Kesultanan Kadriyah</option>
                <option value="permukiman-kapuas" {{ $heritage->kategori == 'permukiman-kapuas' ? 'selected' : '' }}>🏡 Rumah Tradisional & Permukiman Air (Kawasan Kapuas)</option>
                <option value="rumah-ibadah" {{ $heritage->kategori == 'rumah-ibadah' ? 'selected' : '' }}>🕌 Rumah Ibadah Bersejarah & Simbol Pluralisme</option>
                <option value="bangunan-kolonial" {{ $heritage->kategori == 'bangunan-kolonial' ? 'selected' : '' }}>🏢 Bangunan Kolonial Belanda & Fasilitas Publik Lama</option>
                <option value="agrowisata" {{ $heritage->kategori == 'agrowisata' ? 'selected' : '' }}>🌴 Agrowisata & Potensi Daerah</option>
            </select>
        </div>

        <div class="mb-5">
            <label class="block mb-2 font-semibold">
                Deskripsi
            </label>
            <textarea name="deskripsi"
                      rows="6"
                      class="w-full border rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-500"
                      required>{{ $heritage->deskripsi }}</textarea>
        </div>

        <div class="mb-5">
            <label class="block mb-2 font-semibold">
                Gambar Budaya
            </label>
            
            <div class="mb-3">
                <p class="text-xs text-gray-500 mb-1">Gambar saat ini:</p>
                <img id="preview" 
                     src="{{ asset('storage/' . $heritage->gambar) }}"
                     class="w-40 rounded-lg shadow-md object-cover max-h-48">
            </div>

            <input type="file"
                   name="gambar"
                   onchange="previewImage(event)"
                   class="w-full border rounded-lg p-3">
            <p class="text-xs text-gray-400 mt-1">*Kosongkan jika tidak ingin mengubah gambar.</p>
        </div>

        <button class="bg-blue-700 text-white px-6 py-3 rounded-lg hover:bg-blue-800 transition font-semibold">
            Update Artikel
        </button>

    </form>

</div>

<script>
// Fungsi untuk mengganti gambar preview lama menjadi gambar baru yang baru saja dipilih
function previewImage(event) {
    const preview = document.getElementById('preview');
    if (event.target.files && event.target.files[0]) {
        preview.src = URL.createObjectURL(event.target.files[0]);
    }
}
</script>
</body>
</html>