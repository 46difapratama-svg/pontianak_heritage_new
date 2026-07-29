<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artikel Budaya</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 p-10">

<div class="max-w-7xl mx-auto">

    <div class="flex justify-between items-center mb-8">

        <div class="flex items-center gap-4">
            <a href="/dashboard" 
               class="flex items-center justify-center bg-white text-gray-700 hover:text-blue-700 p-2.5 rounded-xl border border-gray-200 shadow-sm transition group hover:border-blue-200">
                <svg class="w-5 h-5 transform group-hover:-translate-x-0.5 transition-transform" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"></path>
                </svg>
                <span class="sr-only">Kembali ke Dashboard</span>
            </a>
            
            <h1 class="text-3xl font-bold text-gray-950">
                Artikel Budaya
            </h1>
        </div>

        <a href="/heritages/create"
           class="bg-blue-700 text-white px-5 py-3 rounded-xl font-medium hover:bg-blue-800 transition shadow-sm flex items-center gap-2">
            <span>+</span> Tambah Artikel
        </a>

    </div>

    @if(session('success'))
        <div class="bg-green-100 text-green-700 p-4 rounded-xl mb-6 font-medium shadow-sm border border-green-200">
            {{ session('success') }}
        </div>
    @endif

    <div class="bg-white rounded-2xl shadow overflow-hidden border border-gray-200">

        <table class="w-full">

            <thead class="bg-gray-50 border-b border-gray-200">

                <tr>
                    <th class="p-4 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">Gambar</th>
                    <th class="p-4 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">Judul</th>
                    <th class="p-4 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">Kategori</th>
                    <th class="p-4 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">Aksi</th>
                </tr>

            </thead>

            <tbody class="divide-y divide-gray-100">

            @forelse($heritages as $item)

                <tr class="hover:bg-gray-50/50 transition">

                    <td class="p-4">

                        @if($item->gambar)

                        <img src="{{ asset('storage/' . $item->gambar) }}"
                             class="w-24 h-16 object-cover rounded-lg shadow-sm">

                        @endif

                    </td>

                    <td class="p-4 font-medium text-gray-900">
                        {{ $item->judul }}
                    </td>

                    <td class="p-4">
                        <span class="bg-blue-50 text-blue-700 px-3 py-1 rounded-full text-xs font-semibold">
                            {{ $item->kategori }}
                        </span>
                    </td>

                    <td class="p-4">
                        <div class="flex gap-2 items-center">
                            
                            <a href="/heritages/{{ $item->id }}/edit"
                               class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-lg text-sm font-medium transition shadow-sm">
                                Edit
                            </a>
                        <form action="/heritages/{{ $item->id }}" method="POST" onsubmit="return handleConfirmDelete(event, '{{ $item->judul }}')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-600 hover:bg-red-700 active:scale-95 text-white px-4 py-2 rounded-lg text-sm font-medium transition duration-150 shadow-sm flex items-center gap-1.5 focus:outline-none">
                                <!-- class btn-icon wajib ada -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 btn-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg>
                                <!-- class btn-text wajib ada -->
                                <span class="btn-text">Hapus</span>
                            </button>
                        </form>
                        </div>
                    </td>

                </tr>

            @empty

                <tr>
                    <td colspan="4"
                        class="p-16 text-center text-gray-400 font-medium">
                        <span class="text-3xl block mb-2">📦</span>
                        Belum ada artikel budaya
                    </td>
                </tr>

            @endforelse

            </tbody>

        </table>

    </div>

</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function handleConfirmDelete(event, title) {
        // Tahan form agar tidak langsung ke-submit
        event.preventDefault();
        
        const form = event.target;
        const button = form.querySelector('button[type="submit"]');
        const btnText = form.querySelector('.btn-text');
        const btnIcon = form.querySelector('.btn-icon');

        // Munculkan pop-up notifikasi modern
        Swal.fire({
            title: 'Apakah Anda yakin?',
            text: `Artikel "${title}" akan dihapus permanen!`,
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#dc2626', // Warna merah Tailwind (bg-red-600)
            cancelButtonColor: '#4b5563',  // Warna abu-abu Tailwind (bg-gray-600)
            confirmButtonText: 'Ya, Hapus!',
            cancelButtonText: 'Batal',
            background: '#ffffff',
            customClass: {
                popup: 'rounded-2xl shadow-xl'
            }
        }).then((result) => {
            // Jika admin klik "Ya, Hapus!"
            if (result.isConfirmed) {
                // Efek Loading Mulus pada tombol asli di tabel
                if (button) {
                    button.disabled = true;
                    button.classList.remove('bg-red-600', 'hover:bg-red-700');
                    button.classList.add('bg-red-400', 'cursor-not-allowed');
                }
                if (btnText) btnText.textContent = 'Menghapus...';
                if (btnIcon) btnIcon.classList.add('hidden');

                // Jalankan proses hapus ke server
                form.submit();
            }
        });
    }
</script>
</body>
</html>