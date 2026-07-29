<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Budaya (Meriam Karbit) - Admin</title>
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
            <!-- Menu Aktif -->
            <a href="/events" class="block bg-blue-700 px-4 py-3 rounded-lg font-semibold">Event Budaya</a>
        </nav>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-8">

        <!-- Header -->
        <div class="flex justify-between items-center mb-8">
           <div>
                <h2 class="text-3xl font-bold text-gray-800">Event & Festival Budaya</h2>
                <p class="text-gray-500">Kelola jadwal festival tahunan, eksibisi, dan perayaan adat tradisional di Kota Pontianak</p>
            </div>
            <a href="{{ route('events.create') }}" class="bg-red-600 text-white px-5 py-3 rounded-lg font-medium hover:bg-red-700 transition shadow">
                + Tambah Event
            </a>
        </div>

        <!-- Grid Data Event -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            
            @forelse($events as $item)
                <div class="bg-white rounded-2xl overflow-hidden shadow-sm border border-gray-200 flex flex-col">
                    <div class="relative h-48 bg-gray-200">
                        <img src="{{ asset('storage/' . $item->foto) }}" alt="{{ $item->nama_event }}" class="w-full h-full object-cover">
                       <span class="absolute top-3 right-3 bg-red-600 text-white text-xs px-2.5 py-1 rounded-full font-semibold">
                        {{ $item->kategori }}
                    </span>
                    </div>
                   <div class="p-5 flex-1 flex flex-col justify-between">
                        <div>
                            <!-- Kategori & Judul -->
                            <h4 class="font-bold text-gray-800 text-lg line-clamp-1">{{ $item->nama_event }}</h4>
                            <p class="text-gray-600 text-sm mt-2 line-clamp-3">
                                {{ $item->deskripsi ?? 'Tidak ada deskripsi untuk festival ini.' }}
                            </p>
                        </div>
                        
                        <!-- Aksi Kendali -->
                        <div class="flex gap-2 mt-4 pt-3 border-t border-gray-100">
                            <a href="{{ route('events.edit', $item->id) }}" class="flex-1 text-center bg-gray-100 hover:bg-gray-200 text-gray-700 py-2 rounded-lg text-sm font-medium transition">
                                Edit
                            </a>
                           <form action="{{ route('events.destroy', $item->id) }}" 
                            method="POST" 
                            class="flex-1" 
                            onsubmit="return handleConfirmEventDelete(event, '{{ $item->nama_event }}')">
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
                <div class="col-span-full bg-white rounded-2xl p-12 text-center border border-dashed border-gray-300">
                    <p class="text-gray-400">Belum ada agenda festival budaya yang dijadwalkan.</p>
                </div>
            @endforelse

        </div>

    </main>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    // Notifikasi Otomatis jika ada session success dari Controller
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

    // Fungsi konfirmasi hapus modern
    function handleConfirmEventDelete(event, name) {
        event.preventDefault();
        const form = event.target;
        const button = form.querySelector('button[type="submit"]');
        const btnText = form.querySelector('.btn-text');

        Swal.fire({
            title: 'Hapus Event?',
            text: `Event "${name}" akan dihapus permanen!`,
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#dc2626',
            cancelButtonColor: '#4b5563',
            confirmButtonText: 'Ya, Hapus!',
            cancelButtonText: 'Batal',
            customClass: { popup: 'rounded-2xl' }
        }).then((result) => {
            if (result.isConfirmed) {
                // Efek loading
                button.disabled = true;
                button.classList.add('opacity-70', 'cursor-not-allowed');
                if(btnText) btnText.textContent = 'Menghapus...';
                
                form.submit();
            }
        });
    }
</script>
</body>
</html>