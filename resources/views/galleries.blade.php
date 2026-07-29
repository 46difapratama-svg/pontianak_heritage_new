<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri Budaya - Admin</title>

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
               class="block hover:bg-blue-700 px-4 py-3 rounded-lg">
                Dashboard
            </a>

            <a href="/heritages"
               class="block hover:bg-blue-700 px-4 py-3 rounded-lg">
                Artikel Budaya
            </a>

            <!-- Menu Aktif: Galeri Budaya -->
            <a href="/galleries"
               class="block bg-blue-700 px-4 py-3 rounded-lg font-semibold">
                Galeri Budaya
            </a>

            <a href="/events"
               class="block hover:bg-blue-700 px-4 py-3 rounded-lg">
                Event Budaya
            </a>
        </nav>

    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-8">

        <!-- Header Halaman -->
        <div class="flex justify-between items-center mb-8">
           <div>
                <h2 class="text-3xl font-bold text-gray-800">Galeri Budaya</h2>
                <p class="text-gray-500">
                    Kelola dokumentasi kain tradisi, baju adat, dan kelengkapan busana khas Pontianak
                </p>
            </div>

            <!-- Tombol Tambah Galeri -->
            <a href="{{ route('galleries.create') }}"
               class="bg-blue-700 text-white px-5 py-3 rounded-lg font-medium hover:bg-blue-800 transition shadow">
                + Tambah Foto Galeri
            </a>
        </div>

        <!-- Grid Galeri Foto -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            
            <!-- Loop data galeri dinamis dari database -->
            @forelse($galleries as $item)
                <div class="bg-white rounded-2xl overflow-hidden shadow-sm border border-gray-200 flex flex-col">
                    <div class="relative h-48 bg-gray-200">
                        <!-- Menampilkan gambar dinamis dari storage -->
                        <img src="{{ asset('storage/' . $item->foto) }}" alt="{{ $item->judul }}" class="w-full h-full object-cover">
                    </div>
                    
                    <div class="p-5 flex-1 flex flex-col justify-between">
                        <div>
                            <h4 class="font-bold text-gray-800 text-lg line-clamp-1">{{ $item->judul }}</h4>
                            <p class="text-xs text-blue-600 font-semibold uppercase mt-1 tracking-wider">{{ $item->kategori }}</p>
                            <p class="text-gray-500 text-xs mt-2 line-clamp-2">{{ $item->deskripsi }}</p>
                        </div>
                        
                        <!-- Aksi Kendali -->
                        <div class="flex gap-2 mt-4 pt-3 border-t border-gray-100">
                            <!-- Tombol Edit Berfungsi -->
                            <a href="{{ route('galleries.edit', $item->id) }}" 
                               class="flex-1 text-center bg-gray-100 hover:bg-gray-200 text-gray-700 py-2 rounded-lg text-sm font-medium transition">
                                Edit
                            </a>
                            
                           <!-- Form Hapus Event -->
                       <form action="{{ route('galleries.destroy', $item->id) }}" 
                            method="POST" 
                            class="flex-1" 
                            onsubmit="return handleConfirmGalleryDelete(event, '{{ $item->judul }}')">
                            @csrf
                            @method('DELETE')
                            
                            <button type="submit" 
                                    class="w-full bg-red-50 hover:bg-red-100 text-red-600 py-2 rounded-lg text-sm font-medium transition active:scale-95 flex items-center justify-center gap-1.5 focus:outline-none">
                                <span class="btn-text">Hapus</span>
                            </button>
                        </form>
                        </div>
                    </div>
                </div>
            @empty
                <!-- Tampilan otomatis jika data di database kosong -->
                <div class="col-span-full bg-white rounded-2xl p-12 text-center border border-dashed border-gray-300">
                    <p class="text-gray-400">Belum ada dokumen foto di dalam galeri budaya.</p>
                </div> 
            @endforelse

        </div>

    </main>

</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    // Notifikasi Otomatis setelah redirect dari Controller
    @if(session('success'))
        Swal.fire({
            icon: 'success',
            title: 'Berhasil!',
            text: "{{ session('success') }}",
            timer: 2000,
            showConfirmButton: false,
            toast: true,
            position: 'top-end',
            customClass: { popup: 'rounded-2xl' }
        });
    @endif

    // Fungsi konfirmasi hapus tetap sama seperti yang kita buat sebelumnya
    function handleConfirmGalleryDelete(event, title) {
        event.preventDefault();
        const form = event.target;
        const button = form.querySelector('button[type="submit"]');
        const btnText = form.querySelector('.btn-text');

        Swal.fire({
            title: 'Hapus Foto?',
            text: `Foto "${title}" akan dihapus permanen!`,
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#dc2626',
            cancelButtonColor: '#4b5563',
            confirmButtonText: 'Ya, Hapus!',
            cancelButtonText: 'Batal',
            customClass: { popup: 'rounded-2xl' }
        }).then((result) => {
            if (result.isConfirmed) {
                if(button) {
                    button.disabled = true;
                    button.classList.add('opacity-70', 'cursor-not-allowed');
                }
                if(btnText) btnText.textContent = 'Menghapus...';
                form.submit();
            }
        });
    }
</script>
</body>
</html>