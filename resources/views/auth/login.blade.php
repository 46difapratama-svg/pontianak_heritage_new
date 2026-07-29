<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Pontianak Heritage Movement</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 text-gray-800 antialiased font-sans">

<div class="min-h-screen flex flex-col md:flex-row">
    
    <div class="hidden md:flex md:w-1/2 bg-blue-950 relative items-center justify-center p-12 bg-cover bg-center"
         style="background-image: url('{{ asset('images/bg-masthead.jpg') }}');">
        
        <div class="absolute inset-0 bg-blue-950/85 backdrop-blur-[2px]"></div>

        <div class="relative z-10 max-w-md text-center md:text-left">
            <a href="/" class="inline-flex items-center gap-3 mb-8 group">
                <img src="{{ asset('images/Logo Kota Pontianak.png') }}" alt="Logo Pontianak" class="h-12 w-auto object-contain bg-white/10 p-1.5 rounded-xl">
                <img src="{{ asset('images/LogoPontianakHeritage.png') }}" alt="Logo Heritage" class="h-12 w-auto object-contain">
            </a>
            
            <h2 class="text-4xl font-bold text-white leading-tight mb-4">
                Satu Langkah Menuju Pelestarian Sejarah
            </h2>
            <p class="text-blue-200 leading-relaxed">
                Masuk ke dalam dashboard admin untuk mengelola dokumentasi sejarah, struktur cagar budaya, dan nilai warisan berharga Kota Pontianak.
            </p>
            
            <div class="mt-8 pt-8 border-t border-white/10 flex gap-4 text-xs text-blue-300">
                <div>✨ Manajemen Data Mudah</div>
                <div>🔒 Autentikasi Aman</div>
            </div>
        </div>
    </div>

    <div class="flex-1 flex items-center justify-center p-8 sm:p-12 md:p-16 bg-white">
        <div class="w-full max-w-md mx-auto space-y-8">
            
            <div class="text-center md:text-left">
                <div class="flex justify-center md:justify-start gap-3 mb-6 md:hidden">
                    <img src="{{ asset('images/Logo Kota Pontianak.png') }}" alt="Logo Pontianak" class="h-10 w-auto">
                    <img src="{{ asset('images/LogoPontianakHeritage.png') }}" alt="Logo Heritage" class="h-10 w-auto">
                </div>
                <h1 class="text-3xl font-bold text-gray-950 tracking-tight">Selamat Datang Kembali</h1>
                <p class="text-sm text-gray-500 mt-2">Silakan masukkan akun Anda untuk melanjutkan akses admin.</p>
            </div>

            @if ($errors->any())
                <div class="bg-red-50 border-l-4 border-red-500 p-4 rounded-xl text-sm text-red-700">
                    <ul class="list-disc list-inside space-y-1">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}" class="space-y-6">
                @csrf

                <div>
                    <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">Alamat Email</label>
                    <div class="relative">
                        <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username"
                               class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:bg-white focus:ring-4 focus:ring-blue-100 focus:border-blue-700 transition outline-none text-gray-900"
                               placeholder="nama@email.com">
                    </div>
                </div>

                <div>
                    <div class="flex justify-between items-center mb-2">
                        <label for="password" class="text-sm font-semibold text-gray-700">Kata Sandi</label>
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="text-xs font-semibold text-blue-700 hover:underline">
                                Lupa sandi?
                            </a>
                        @endif
                    </div>
                    <input id="password" type="password" name="password" required autocomplete="current-password"
                           class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:bg-white focus:ring-4 focus:ring-blue-100 focus:border-blue-700 transition outline-none text-gray-900"
                           placeholder="••••••••">
                </div>

                <div class="flex items-center justify-between">
                    <label class="flex items-center gap-2 cursor-pointer select-none">
                        <input type="checkbox" name="remember" class="w-4 h-4 rounded text-blue-700 border-gray-300 focus:ring-blue-500">
                        <span class="text-sm text-gray-600">Ingat perangkat ini</span>
                    </label>
                </div>

                <div class="space-y-4 pt-2">
                    <button type="submit" 
                            class="w-full bg-blue-700 text-white py-3.5 px-5 rounded-xl font-bold hover:bg-blue-800 transition shadow-md shadow-blue-700/10 active:transform active:scale-[0.99]">
                        Masuk Sistem
                    </button>

                    <div class="relative flex py-2 items-center">
                        <div class="flex-grow border-t border-gray-200"></div>
                        <span class="flex-shrink mx-4 text-gray-400 text-xs font-medium uppercase tracking-wider">Atau Pengguna Baru</span>
                        <div class="flex-grow border-t border-gray-200"></div>
                    </div>

                    <a href="{{ route('register') }}" 
                       class="w-full flex items-center justify-center border-2 border-gray-200 text-gray-700 py-3.5 px-5 rounded-xl font-bold hover:bg-gray-50 hover:border-gray-300 transition">
                        Buat Akun Baru (Daftar)
                    </a>
                </div>
            </form>

            <div class="text-center pt-4">
                <a href="/" class="text-sm font-medium text-gray-500 hover:text-blue-700 transition inline-flex items-center gap-1">
                    ← Kembali ke Beranda Utama
                </a>
            </div>

        </div>
    </div>

</div>

</body>
</html>