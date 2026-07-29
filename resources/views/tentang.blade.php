<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - Pontianak Heritage Movement</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        /* Gaya khusus untuk drop cap (huruf pertama besar) sesuai gambar */
        .drop-cap::first-letter {
            font-family: Georgia, serif;
            float: left;
            font-size: 3.5rem;
            line-height: 1;
            font-weight: bold;
            padding-right: 0.55rem;
            margin-top: 0.15rem;
            color: #1e3a8a;
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800 antialiased flex flex-col min-h-screen">

    <nav class="bg-white shadow sticky top-0 left-0 z-50">
        <div class="max-w-7xl mx-auto px-8 py-4 flex justify-between items-center">
            <a href="/" class="flex items-center gap-4">
                <img src="{{ asset('images/Logo Kota Pontianak.png') }}" alt="Logo Kota" class="h-12 w-auto object-contain">
                <img src="{{ asset('images/LogoPontianakHeritage.png') }}" alt="Logo Heritage" class="h-12 w-auto object-contain">
            </a>
            <div class="flex gap-8 items-center">
                <a href="/" class="text-gray-600 hover:text-blue-700 font-semibold text-sm">Home</a>
                <a href="/tentang" class="text-blue-700 font-bold text-sm">Tentang</a>
                <a href="/login" class="bg-blue-600 text-white px-6 py-2.5 rounded-xl font-bold text-sm hover:bg-blue-700 transition">Login</a>
            </div>
        </div>
    </nav>

    <main class="flex-grow max-w-4xl mx-auto px-6 py-16">
        
        <div class="text-center mb-12">
            <span class="text-blue-700 font-bold text-xs uppercase tracking-widest bg-blue-50 px-4 py-1.5 rounded-full">Mengenal Gerakan Kami</span>
            <h1 class="text-4xl font-black text-gray-900 mt-4 tracking-tight">Pontianak Heritage Movement</h1>
            <div class="h-1 w-16 bg-blue-600 mx-auto mt-4 rounded-full"></div>
        </div>

        <div class="bg-white rounded-3xl p-8 md:p-12 shadow-sm border border-gray-100 space-y-8 leading-relaxed text-gray-600">
            
            <!-- LATAR BELAKANG -->
            <section>
                <h2 class="text-2xl font-bold text-gray-900 mb-3 flex items-center gap-2">
                    <span>📜</span> Latar Belakang & Sejarah
                </h2>
                <p>
                    Kota Pontianak, yang didirikan pada tanggal 23 Oktober 1771 oleh Syarif Abdurrahman Alkadrie, menyimpan kekayaan sejarah yang luar biasa di sepanjang tepian Sungai Kapuas. Seiring berjalannya waktu dan pesatnya modernisasi, banyak narasi sejarah dan cagar budaya fisik yang mulai terlupakan oleh generasi muda.
                </p>
                <p class="mt-4">
                    <strong>Pontianak Heritage Movement</strong> lahir sebagai sebuah inisiatif digital independen yang bertujuan untuk mendokumentasikan, mengarsipkan, dan menyebarluaskan informasi mengenai objek cagar budaya, arsitektur kolonial, situs kesultanan, hingga warisan budaya takbenda yang ada di Kota Khatulistiwa ini.
                </p>
            </section>

            <hr class="border-gray-100">

            <!-- VISI & MISI -->
            <section class="grid md:grid-cols-2 gap-8">
                <div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2 flex items-center gap-2">
                        <span>🎯</span> Visi Kami
                    </h3>
                    <p class="text-sm">
                        Menjadi pusat data dan ensiklopedia digital cagar budaya Kota Pontianak yang terpercaya, interaktif, dan mudah diakses oleh masyarakat luas demi menjaga kelestarian identitas daerah.
                    </p>
                </div>
                <div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2 flex items-center gap-2">
                        <span>🚀</span> Misi Kami
                    </h3>
                    <ul class="text-sm list-disc list-inside space-y-1.5">
                        <li>Mengedukasi masyarakat mengenai pentingnya menjaga situs bersejarah.</li>
                        <li>Menyediakan platform dokumentasi visual dan narasi yang akurat.</li>
                        <li>Mendorong keterlibatan generasi muda dalam gerakan pelestarian budaya.</li>
                    </ul>
                </div>
            </section>

            <hr class="border-gray-100">

            <!-- DATA PUBLIKASI & ATRIBUSI -->
            <section class="space-y-6 pt-2">
                <div class="flex flex-col md:flex-row justify-between items-start gap-6 bg-gray-50/50 p-6 rounded-2xl border border-gray-100">
                    <div class="space-y-4 max-w-xl">
                        <div>
                            <h4 class="text-lg font-bold text-gray-900 tracking-tight">Pontianak Heritage</h4>
                            <p class="text-xs text-gray-500 italic">Dan Beberapa Yang Berciri Khas</p>
                            <p class="text-xs text-gray-400 mt-0.5">Copyright © 2013 · xxxviii + 118 hlm · 155 × 215 mm</p>
                        </div>
                        
                        <div class="text-sm space-y-1.5 text-gray-700">
                            <p><strong>Penulis :</strong> Ahmad Asma dZ</p>
                            <p><strong>Tata Letak & Desain Kaver :</strong> Aderenser</p>
                            <p><strong>Ilustrasi Cover :</strong> Aderenser</p>
                            <p><strong>Cetakan Pertama :</strong> Mei 2013</p>
                        </div>
                    </div>

                    <div class="text-xs text-gray-500 bg-white p-4 rounded-xl shadow-sm border border-gray-100 md:max-w-xs w-full space-y-1">
                        <p class="font-bold text-gray-800 mb-1">Literer Khatulistiwa</p>
                        <p><strong>Email :</strong> ilketh@yahoo.co.id</p>
                        <p class="pl-11">iltekha@gmail.com</p>
                        <p><strong>Telp :</strong> +62 561 7369196</p>
                        <p class="pl-9">+62 81458569116</p>
                        <p><strong>Web :</strong> www.litererkhatulistiwa.wordpress.com</p>
                    </div>
                </div>

                <div class="space-y-2">
                    <h4 class="text-sm font-bold text-gray-900 uppercase tracking-wider flex items-center gap-2">
                        <span>📸</span> Dokumentasi Foto
                    </h4>
                    <p class="text-sm font-medium text-gray-800">Foto dalam buku ini merupakan dokumentasi pribadi.</p>
                    <ul class="text-xs list-disc list-inside space-y-1.5 pl-1 text-gray-600">
                        <li>Diambil dengan menggunakan kamera Canon dSLR, Yakinah F3.5–5.6.</li>
                        <li>Kecuali foto-foto pada halaman 21, 39, 43 merupakan foto Tugu Khatulistiwa (foto-foto lainnya milik penulis).</li>
                        <li>Foto pada halaman 34, 41, 42, 46, 47, 52(tengah), 54(kiri bawah) (penulis ambil berbagai sumber yang tersebar di internet).</li>
                    </ul>
                </div>

                <div class="bg-gray-900 text-gray-400 p-5 rounded-2xl text-xs space-y-2 border border-gray-950 shadow-sm">
                <p class="font-bold text-gray-200 flex items-center gap-1.5">🗂️ Perpustakaan Nasional · Katalog Dalam Terbitan (KDT)</p>
                <div class="text-[12px] md:text-[13px] text-gray-300 leading-relaxed bg-gray-950/50 px-6 py-5 md:px-8 rounded-xl border border-gray-800 space-y-1">
                    <p class="font-semibold text-white">Asma, Ahmad dZ</p>
                    <p class="pl-4 md:pl-6 text-justify">Pontianak Heritage, Cet. 1 · Pontianak, Literer Khatulistiwa, 2013</p>
                    <p class="pl-4 md:pl-6">xxxviii + 118 hlm : 15.5 × 215 mm</p>
                    <p class="pl-4 md:pl-6 font-bold text-amber-400 tracking-wide">ISBN : 978-602-19769-8-2</p>
                </div>
            </div>
            </section>

            <hr class="border-gray-100">

            <!-- BAIT-BAIT PANTUN -->
            <section class="bg-white rounded-2xl p-6 md:p-8 border border-gray-100 text-left font-serif text-[15px] text-gray-800 leading-relaxed space-y-6 max-w-xl mx-auto">
                <div>
                    Merajut rotan menjadi tilam<br>
                    Tilam dihampar di ruang tengah<br>
                    Saya Ahmad memberi salam<br>
                    Hantarkan buku berisi sejarah
                </div>

                <div>
                    Mengetam kayu lalu memaku<br>
                    Memaku pagar di dalam taman<br>
                    Mengulas makna menjadi buku<br>
                    Membawa manfaat haqeqat iman
                </div>

                <div>
                    Bekayoh sampan kekota lama<br>
                    Ingin menari serta berdendang<br>
                    Pontianak ini kota lama<br>
                    Banyak bangsa tumbuh berkembang
                </div>

                <div>
                    Bukan gigi putih waktu tertawa<br>
                    Namun pipi merona merah<br>
                    Bukan hanya tugu khatulistiwa<br>
                    Setiap sudut kota bernilai sejarah
                </div>

                <div>
                    Selangkah kaki di dini hari<br>
                    Menyibak sarung menuju musholah<br>
                    Semoga kehadiran buku ini<br>
                    Membawa diri semakin berkah
                </div>

                <div>
                    Ambilkan saya sebilah parang<br>
                    Menebang onak juga mengkudu<br>
                    Ajarkan bakti agar tak lekang<br>
                    Dari datok sampai ke cucu
                </div>
            </section>

            <hr class="border-gray-100">

            <!-- SEKSI BARU: POLAROID TANPA IMAGE (Sesuai gambar image_5a2188.png) -->
            <section class="bg-white rounded-2xl border border-gray-100 overflow-hidden shadow-sm">
                
                <!-- Aksen Garis Horisontal Tebal Warna Biru Tua di Bagian Atas -->
                <div class="h-6 w-full bg-blue-900"></div>

                <!-- Konten Utama -->
                <div class="p-6 md:p-8 flex flex-col space-y-6 font-serif text-gray-700 leading-relaxed text-[15px]">
                    
                    <!-- Header Judul -->
                    <div>
                        <h3 class="text-3xl font-bold font-sans text-gray-900 tracking-tight mb-1">Polaroid</h3>
                        <p class="text-xs font-sans text-gray-500 italic">Sebuah Penghantar Kebudayaan, Kota dan Heritage Movement.</p>
                    </div>

                    <!-- Kotak Narasi Abu-Abu (Callout Box) -->
                    <div class="bg-gray-50/80 border border-gray-200/80 px-6 py-5 md:px-8 md:py-6 rounded-2xl font-sans text-[13px] md:text-[14px] text-gray-600 leading-relaxed tracking-wide shadow-sm">
                        Hari itu, hari Kamis, 22 September, waktu hampir menunjukkan pukul 12 siang, matahari terik menyengat. Seseorang yang memakai baju berwarna putih lalu bergegas ke arah utara. “Ayo! cepat,” katanya. Tak seberapa lama tiga orang kawannya pun menyusul, seorang lagi, yang berjalan agak di belakang, mengenteng kamera sambil memperhatikan bangunan tua yang menjulang. “Stooop!” katanya tiba-tiba, “di situ saja, gambarnya pas”. Lalu ‘klik’ berfotolah mereka, dengan latar Tugu Khatulistiwa, tepat di garis nol derajat garis edar matahari.
                    </div>

                    <!-- Teks Utama dengan Drop Cap -->
                    <p class="drop-cap text-justify">
                        Sering dilakukan oleh banyak orang berfoto dengan latar belakang bangunan lama atau tempat berciri khas ketika berkunjung ke suatu tempat. Mungkin Anda juga, atau mungkin saya salah satunya. Sebagai kenang-kenangan bahwa kita pernah berkunjung ke tempat tersebut.
                    </p>

                    <p class="text-justify">
                        Namun, apakah hal itu hanya sebatas kenang-kenangan? Jawabannya adalah Tidak! Karena ada ‘dimensi’ yang jauh lebih luas. Setidaknya kita dapat melihatnya dalam dua dimensi. Pertama, dimensi pertemuan ruang dan waktu. Waktu sekarang yang diwakili oleh kitanya dan waktu lampau yang diwakili oleh bangunan atau tempat tersebut. Kedua, dimensi analisa kebudayaan.
                    </p>
                </div>
            </section>

        </div>
        <section class="bg-white rounded-2xl border border-gray-100 overflow-hidden shadow-sm mt-8">
                
                <div class="h-4 w-full bg-blue-900"></div>

                <div class="px-6 py-6 md:px-10 md:py-8 flex flex-col space-y-5 font-serif text-gray-700 leading-relaxed text-[15px]">
                    
                    <div class="font-sans border-b border-gray-100 pb-3">
                        <h3 class="text-3xl font-bold text-gray-900 tracking-tight mb-1">Catatan Akhir</h3>
                        <p class="text-xs text-gray-500 italic">Pontianak Heritage Movement</p>
                    </div>

                    <p class="text-justify">
                        Tulisan ini merupakan sebuah catatan pendek mengenai sejarah Kota Pontianak, sebuah ikhtiar kecil untuk mengenalkan kembali narasi masa lalu kota ini kepada generasi sekarang. Tentu saja, sebagai sebuah karya yang lahir dari keterbatasan, buku ini masih jauh dari kata sempurna. Banyak celah, kekurangan, dan ruang-ruang kosong yang belum terisi dengan lengkap.
                    </p>

                    <p class="text-justify">
                        Oleh karena itu, segala bentuk kritik, saran, maupun masukan yang bersifat membangun akan selalu diterima dengan tangan terbuka demi perbaikan dan penyempurnaan karya-karya dokumentasi sejarah di masa yang akan datang.
                    </p>

                    <div class="pt-4 font-sans text-right text-sm text-gray-600">
                        <p class="italic">Pontianak, Mei 2013</p>
                        <p class="font-bold text-gray-900 mt-1">Ahmad Asma dZ</p>
                    </div>
                </div>
            </section>
            <section class="bg-white rounded-2xl border border-gray-100 overflow-hidden shadow-sm mt-8">
                
                <div class="h-4 w-full bg-blue-900"></div>

                <div class="px-6 py-6 md:px-10 md:py-8 flex flex-col space-y-5 font-serif text-gray-700 leading-relaxed text-[15px]">
                    
                    <div class="font-sans border-b border-gray-100 pb-3">
                        <h3 class="text-3xl font-bold text-gray-900 tracking-tight mb-1">Biodata Penulis</h3>
                        <p class="text-xs text-gray-500 italic">Tentang Penulis Buku Pontianak Heritage</p>
                    </div>

                    <p class="text-justify">
                        <strong class="font-sans text-gray-900">Ahmad Asma dZ</strong>, lahir di Pontianak pada 23 September 1982. Menyelesaikan pendidikan dasar di SD Negeri 22 Pontianak Timur (1995), SMP Negeri 7 Pontianak Timur (1998), dan SMU Negeri 6 Pontianak Timur (2001). Gelar Sarjana Pendidikan diperoleh dari Universitas Tanjungpura (Untan) Pontianak pada Fakultas Keguruan dan Ilmu Pendidikan (FKIP) Program Studi Pendidikan Sejarah (2007).
                    </p>

                    <p class="text-justify">
                        Sejak mahasiswa aktif di berbagai organisasi, antara lain: Himpunan Mahasiswa Islam (HMI) Cabang Pontianak, Kesatuan Aksi Mahasiswa Muslim Indonesia (KAMMI) Daerah Pimpinan Daerah Pontianak, SEMA FKIP Untan, dan menjabat sebagai Ketua Umum Badan Perwakilan Mahasiswa (BPM) FKIP Untan periode 2005-2006. Selain itu, aktif dalam dunia jurnalistik kampus sebagai Pemimpin Redaksi Majalah Mahasiswa Mimbar Untan periode 2005-2006.
                    </p>

                    <p class="text-justify">
                        Saat ini bekerja sebagai staf pengajar di lingkungan Dinas Pendidikan Kota Pontianak, serta aktif dalam kegiatan penelitian sejarah lokal, penulisan artikel di media massa lokal, dan pengembangan komunitas pelestarian cagar budaya di Kalimantan Barat.
                    </p>
                </div>
            </section>
            <!-- SEKSI 9: HARAPAN & ESENSI KEBUDAYAAN (Sesuai gambar image_502521.png) -->
            <section class="bg-white rounded-2xl border border-gray-100 overflow-hidden shadow-sm mt-8">
                
                <!-- Aksen Garis Horisontal Tebal Warna Biru Tua di Bagian Atas -->
                <div class="h-4 w-full bg-blue-900"></div>

                <!-- Konten Utama: Menggunakan padding longgar agar tulisan tidak menempel border -->
                <div class="px-6 py-6 md:px-10 md:py-8 flex flex-col space-y-5 font-serif text-gray-700 leading-relaxed text-[15px]">
                    
                    <!-- Header Judul -->
                    <div class="font-sans border-b border-gray-100 pb-3">
                        <h3 class="text-3xl font-bold text-gray-900 tracking-tight mb-1">Harapan & Esensi Kebudayaan</h3>
                        <p class="text-xs text-gray-500 italic">Refleksi Akhir Ruang, Waktu, dan Masa Depan Kota</p>
                    </div>

                    <!-- Paragraf Teks Utama (Rata Kanan-Kiri) -->
                    <p class="text-justify">
                        Semoga kehadiran buku ini dapat memberi manfaat. Yang jelas, buku ini bukanlah tujuan. Ia adalah sebuah medium strategi kebudayaan yang coba dijalankan, untuk membuka dan meramaikan perbincangan akan ruang-ruang artifisial yang ada di dekat kita. Memberi informasi dari setiap peninggalan, bangunan, tempat, kampong-kampong bersejarah dan segala hal yang berciri khas, yang ada di kota Pontianak. Untuk kemudian mengetahuinya, menginventarisasi, menjaga dan merawatnya.
                    </p>

                    <p class="text-justify">
                        ‘Sejarah ruang masih menunggu untuk dituliskan’ kata Michael Foucault. Dan Frederick Willhem Nietsche pernah bilang ‘Kemampuan mengombinasikan antara mengingat dan melupakan adalah makna dari Historisitas’. Kami jadi teringat ucapan salah seorang tokoh dalam karya Dan Damai di Bumi-nya Karl May. ‘Mereka yang tidak menghargai masa lalu, juga tidak berharga untuk masa depan,’ katanya.
                    </p>

                    <p class="text-justify">
                        Ini mungkin bagian kecil dari ruang-ruang yang ada di kota kita, kota Pontianak. Namun, kami yakin usaha kecil melalui buku ini dapat berdampak besar nantinya, dalam menginventarisasi, menuliskan dan mengombinasikan setiap bangunan, tempat bersejarah dan tradisi yang ada.
                    </p>

                    <p class="text-justify">
                        Dan triangulasi KEBUDAYAAN sebagai makna besar. KOTA sebagai konstruksi ruang-waktu. Dan HERITAGE sebagai sesuatu daya tarik. Semoga dapat menjadi perbincangan yang konstruktif. Sehingga Pontianak sebagai kota yang sedang berkembang menjadi kota metropolitan, juga menjadi kota yang berkebudayaan, kota yang menjaga heritage-nya, kota yang ramah akan interaksi sejarahnya.
                    </p>

                    <p class="text-justify font-medium text-gray-900">
                        Dan jika bukan kita yang menjaganya bersama-sama, lalu siapa lagi?
                    </p>

                    <!-- Penutup & Tanda Tangan Penulis -->
                    <div class="pt-4 font-sans text-left text-sm text-gray-600">
                        <p class="italic text-gray-500">Salam Hangat-Jabat Erat.</p>
                        <p class="font-bold text-gray-900 mt-0.5">ahmad asma dz</p>
                    </div>
                </div>
            </section>
            <!-- SEKSI 10: WARISAN (SEKAPUR SIRIH) (Sesuai gambar image_501e1a.png) -->
            <!-- Desain Berbeda: Menggunakan tema Editorial Paper dengan background krem hangat -->
            <section class="bg-amber-50/60 rounded-2xl border-2 border-amber-100 shadow-sm overflow-hidden mt-8">
                <div class="px-6 py-8 md:px-12 md:py-10 flex flex-col space-y-6">
                    
                    <!-- Header Judul Eksklusif (Berbeda dari style sebelumnya) -->
                    <div class="text-center space-y-2 border-b-2 border-double border-amber-200 pb-6 max-w-xl mx-auto w-full">
                        <h3 class="text-4xl font-serif font-bold text-amber-950 tracking-wide">Warisan</h3>
                        <p class="text-sm font-sans font-medium tracking-wider text-amber-800 uppercase">
                            Sekapur Sirih <span class="text-gray-900 font-bold block md:inline md:ml-1">Prof Dr Chairil Effendy</span>
                        </p>
                    </div>

                    <!-- Konten Utama: Menggunakan font serif klasik dengan layout multi-kolom pada layar medium/besar -->
                    <div class="font-serif text-[15px] text-amber-950/90 leading-relaxed space-y-6 md:space-y-0 md:gap-8 md:columns-2 text-justify pt-2">
                        
                        <p class="indent-0">
                            <!-- Drop Cap Khusus untuk seksi ini (Huruf W Besar Berwarna Biru Gelap) -->
                            <span class="font-serif float-left text-5xl font-black text-blue-900 leading-[0.8] pr-2 pt-1 font-bold">W</span>arisan adalah sesuatu yang datang dari masa lalu. Ia dapat berbentuk apa saja: kompleks gagasan, aktivitas sosial, dan artifak. Kompleks gagasan dapat dilihat dari ide, gagasan, dan pemikiran para intelektual masa lalu yang masih berpengaruh pada masa kini seperti Ibnu Farabi, Ibnu Sina, atau Al Gazali (warisan pemikiran Islam), atau Thales, Zeno, Parmenides, Plato, Aristoteles (warisan pemikiran Yunani-Romawi), atau pemikiran para filsuf India, Jepang, serta para bagawan kita sepertiNormally I can help with things like this, but I don't seem to have access to that content. You can try again or ask me for something else.
                    </section>
                    <!-- SEKSI 11: LANJUTAN SEKAPUR SIRIH (Sesuai gambar image_5016ba.png) -->
            <!-- Desain Berbeda: Gaya Kolom Jurnal / Opini Koran Klasik -->
            <section class="bg-[#fcfbf7] rounded-3xl border border-stone-200 shadow-sm overflow-hidden mt-8">
                <div class="px-6 py-8 md:px-12 md:py-12 flex flex-col space-y-6">
                    
                    <!-- Header dengan Garis Pembatas Ganda Atas-Bawah ala Kolom Opini -->
                    <div class="border-y-2 border-double border-stone-300 py-4 text-center max-w-xl mx-auto w-full">
                        <span class="text-xs font-sans font-bold tracking-widest text-stone-500 uppercase block mb-1">Sambutan & Catatan</span>
                        <h3 class="text-3xl font-serif font-black text-stone-900 tracking-tight">Esensi Pelestarian & Memori Kota</h3>
                    </div>

                    <!-- Konten Naratif: Menggunakan tata letak multi-kolom pada layar medium ke atas -->
                    <div class="font-serif text-[15px] text-stone-850 leading-relaxed text-justify md:columns-2 md:gap-8 pt-2 space-y-4 md:space-y-0">
                        
                        <p class="mb-4">
                            Menjaga dan melestarikan warisan bangsa pertama-tama dan utama bukanlah dilakukan untuk memenuhi hasrat mencari uang atas nama pariwisata. Warisan atau <span class="italic font-sans text-xs bg-stone-100 px-1 py-0.5 rounded text-stone-700">heritage</span> itu pada hakikatnya adalah sebagian dari sosok kita sebagai satu kesatuan masyarakat atau bangsa. Sosok kita sebagai masyarakat atau bangsa hari ini tidak utuh jika kita tidak memiliki warisan yang masih dapat dilihat (artifak), dicontoh (aktivitas sosial), atau dipelajari (kompleks gagasan). Masyarakat atau bangsa yang mengetahui, memahami, dan menghayati keberadaannya diharapkan menjadi masyarakat dan bangsa yang santun dan bijak.
                        </p>

                        <p class="mb-4">
                            Mengapa? Sebab, sejak dari <span class="italic text-stone-900 font-semibold">sono-nyo</span> kita adalah masyarakat dan bangsa yang plural. Supremasi masyarakat dan bangsa (Indonesia) di masa depan mustahil dapat dicapai jika pluralitas itu dirusak, dicabik-cabik, dan dikhianati. Galibnya, perusak, pencabik, dan pengkhianat tidak mengetahui, tidak memahami, dan tidak menghargai pluralitas kebudayaan Indonesia.
                        </p>

                        <p class="mb-4">
                            Buku kecil yang berjudul <span class="italic font-medium">Pontianak Heritage dan Beberapa yang Bererti Khas</span> ini merupakan buku penting. Ia berisi foto-foto bangunan atau situs-situs bersejarah yang ada di wilayah Kota Pontianak. Tidak hanya itu, ia juga menampilkan foto-foto yang dianggap memiliki kekhususan seperti Aloevera Center, Taman Alun Kapuas, dan lain sebagainya. Kehadiran teks yang menjelaskan keberadaan serta historisitas objek-objek yang ditampilkan sangat membantu pemahaman pembaca.
                        </p>

                        <p class="mb-4">
                            Betapa tidak? Tidak terbayangkan oleh kita saya sebelumnya letak patok Pontianak Nol Kilometer, yang menjadi titik tolak pengukuran ke daerah/wilayah lain, semisal ke Mempawah atau Singkawang atau Sambas. Patok Nol Kilometer itu rupanya tergeletak kegiatannya tidak terurus di wilayah Siantan. 
                        </p>

                        <!-- Blok Kutipan Penulis di dalam kolom -->
                        <div class="bg-amber-50/50 border-l-2 border-amber-500 pl-4 py-2 my-3 font-sans text-xs text-stone-700 break-inside-avoid">
                            <span class="font-bold text-amber-800 block mb-0.5">Kejelian Penulis:</span>
                            Ahmad Asma, sang penulis, jeli lalu memotret dan menuliskan keberadaan patok tersebut, maka sampailah indeks (sebagai wujud salah satu "tanda" di samping simbol dan ikon) kepada kita.
                        </div>

                        <p>
                            Bangsa atau, mungkin lebih tepat, pemerintah kita, agaknya kerapkali tidak sensitif atau tidak terlalu peduli dengan warisan-warisan di kota ini. Gedung-gedung lama yang memiliki nilai historis kini semakin sedikit. Kita baru kehilangan bangunan Gereja Khatredal yang berusia lebih dari 100 tahun. Sebentar lagi kita akan kehilangan Mujahidin. Ingatan akan masjid raya yang dibangun tahun 1970-an itu akan hilang apabila tidak ada pihak yang membangun miniaturnya.
                        </p>

                    </div>

                    <!-- Footer Kecil Akhir Catatan -->
                    <div class="border-t border-stone-200 pt-4 flex justify-between items-center text-xs font-sans text-stone-500">
                        <span>Bagian II dari Sekapur Sirih</span>
                        <span class="italic">Prof. Dr. Chairil Effendy</span>
                    </div>

                </div>
            </section>
            <!-- SEKSI 12: KESIMPULAN SEKAPUR SIRIH (Sesuai gambar naskah terakhir) -->
            <!-- Desain Berbeda: Gaya Naskah Klasik Hangat (Warm Manuscript) -->
            <section class="bg-amber-50/40 rounded-2xl border border-amber-200/60 shadow-sm overflow-hidden mt-8">
                <div class="px-6 py-8 md:px-12 md:py-10 flex flex-col space-y-6">
                    
                    <!-- Header Judul Eksklusif (Gaya Manifesto/Rekomendasi) -->
                    <div class="space-y-1 border-b border-amber-200 pb-4 max-w-md">
                        <span class="text-xs font-sans font-bold tracking-widest text-amber-800 uppercase block">Bagian Akhir</span>
                        <h3 class="text-2xl font-serif font-bold text-amber-950">Catatan Titik Parit & Apresiasi</h3>
                    </div>

                    <!-- Konten Utama Semirikid Sesuai Gambar -->
                    <div class="font-serif text-[15px] text-amber-950/90 leading-relaxed text-justify space-y-5">
                        
                        <p class="first-line:uppercase first-line:tracking-wide">
                    </section>
                        Warisan penting berupa kompleks gagasan yang berkaitan dengan kenyamanan hidup di kota ini juga telah hilang, yaitu parit. Konon, pemerintah Belanda dahulu telah menata Kota Pontianak ini sedemikian rupa dengan parit yang lebar sesuai dengan karakteristik wilayahnya. Warisan pemikiran para insinyur Belanda rupanya tidak diteruskan oleh para insinyur kita. Kini, semakin hari parit semakin sempit, bahkan tidak sedikit yang ditutup. Padahal, jika gagasan tentang parit yang telah dimulai diNormally I can help with things like this, but I don't seem to have access to that content. You can try again or ask me for something else.
                    <!-- SEKSI 13: SEUTAS PINANG IKATAN ARSITEK INDONESIA -->
            <!-- Desain Berbeda: Gaya Studio Arsitektur Minimalis / Slate Clean Style -->
            <section class="bg-slate-50 rounded-2xl border border-slate-300 overflow-hidden shadow-sm mt-8">
                <div class="px-6 py-8 md:px-12 md:py-10 flex flex-col space-y-6">
                    
                    <!-- Header Judul Kontemporer -->
                    <div class="border-b border-slate-200 pb-5">
                        <h3 class="text-3xl font-sans font-bold tracking-tight text-slate-900">
                            <span class="text-amber-500">Seutas Pinang</span> Ikatan Arsitek Indonesia
                        </h3>
                    </div>

                    <!-- Blok Kutipan / Quotes Premium (Gaya Berbeda) -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 bg-white p-5 rounded-xl border border-slate-200 shadow-inner">
                        <div class="relative pl-4 border-l-2 border-amber-500">
                            <p class="font-sans italic text-sm text-slate-700 font-medium">"Jangan sekali-kali melupakan sejarah (jas merah)"</p>
                            <p class="text-xs text-slate-500 mt-1 font-sans">— Soekarno —</p>
                        </div>
                        <div class="relative pl-4 border-l-2 border-slate-400">
                            <p class="font-sans italic text-sm text-slate-700 font-medium">"If you want to understand today, you have to search yesterday."</p>
                            <p class="text-xs text-slate-500 mt-1 font-sans">— Pearl Buck —</p>
                        </div>
                    </div>

                    <!-- Konten Naratif Utama -->
                    <div class="font-serif text-[15px] text-slate-800 leading-relaxed text-justify space-y-5 pt-2">
                        
                        <p class="indent-0">
                            <!-- Drop Cap Bergaya Arsitektur Modern (Sans-Serif Bold) -->                   
                            <span class="font-sans float-left text-5xl font-black text-slate-900 leading-[0.8] pr-2 pt-1">B</span>ebeberapa pendapat menyatakan jika kita melupakan sejarah sama juga dengan kita lupa ingatan (<span class="italic">amnesia</span>), sehingga kita tidak melupakan jati diri yang sesungguhnya. Demikian juga dengan perkembangan arsitektur di Indonesia, sudah sejak tahun 1980-an beberapa ahli bangunan dan arsitektur berupaya untuk menggali apa yang disebut dengan Arsitektur Nusantara, dimana elemen arsitektur Nusantara berasal dari arsitektur lokal yang terdapat di seluruh penjuru Indonesia. Arsitektur Nusantara ini dimaksudkan untuk memberikan jatidiri bangsa Indonesia yang telah di jajah ataupun tergesNormally I can help with things like this, but I don't seem to have access to that content. You can try again or ask me for something else.
                    </section>    
                    <!-- SEKSI 14: LANJUTAN SEUTAS PINANG IKATAN ARSITEK INDONESIA (Sesuai gambar image_4fb8be.png) -->
            <!-- Desain Berbeda: Gaya Laporan Teknis Modern / Architectural Report Style -->
            <section class="bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden mt-8">
                <div class="px-6 py-8 md:px-12 md:py-10 flex flex-col space-y-6">
                    
                    <!-- Header Judul Eksklusif (Gaya Header Laporan Arsitektur) -->
                    <div class="flex items-start gap-3 border-b border-slate-100 pb-4">
                        <div class="border-l-2 border-r-2 border-dashed border-slate-400 h-10 w-1"></div>
                        <div>
                            <span class="text-[11px] font-sans font-bold uppercase tracking-widest text-slate-400 block">Sambutan IAI · Bagian II</span>
                            <h3 class="text-xl font-sans font-extrabold text-slate-900 tracking-tight mt-0.5">Tantangan Dokumentasi Arsitektur Lokal</h3>
                        </div>
                    </div>

                    <!-- Konten Naratif Utama: Menggunakan Font Sans-Serif Bersih untuk Membedakan dengan Sebelumnya -->
                    <div class="font-sans text-[14px] md:text-[15px] text-slate-700 leading-relaxed text-justify space-y-5">
                        
                        <p>
                            Dalam konteks lokal Kalimantan Barat ataupun kota Pontianak, banyak permasalahan yang dihadapi untuk menetapkan nilai-nilai arsitektur, diantaranya adalah belum adanya database mengenai bangunan tradisional/lokal maupun bersejarah, sistem pola perkampungan masyarakat lokal, dan data perkembangan atau tipologi kota. Sehingga lebih banyak asumsi yang disampaikan dalam penetapan arsitektur tradisional di Kalimantan Barat.
                        </p>

                        <p>
                            Harus diakui sejarah perkembangan kota Pontianak dan kota-kota lainnya di Kalimantan Barat memiliki sejarah yang panjang, hal ini yang sering disampaikan bahwa suatu saat kita hanya bisa menceritakan kepada anak cucu kita tentang kebesaran kota Pontianak jaman dahulu tanpa adanya bukti yang tertinggal. Setiap periode bangsa dan budaya yang mempengaruhiNormally I can help with things like this, but I don't seem to have access to that content. You can try again or ask me for something else. 
                        </section>
             <!-- SEKSI 15: MENYAMBUT KATA (Sesuai gambar image_4fb484.png) -->
            <!-- Desain Berbeda: Gaya Modern Fresh Eco-Cultural dengan Nuansa Hijau Lembut -->
            <section class="bg-emerald-50/40 rounded-3xl border border-emerald-100 shadow-sm overflow-hidden mt-8">
                <div class="px-6 py-8 md:px-12 md:py-12 flex flex-col space-y-6">
                    
                    <!-- Header Judul dengan Warna Hijau Ciri Khas Teks Asli -->
                    <div class="border-b-2 border-emerald-500/20 pb-4">
                        <h3 class="text-3xl font-sans font-black text-emerald-700 tracking-tight flex items-center gap-2">
                            Menyambut Kata,
                        </h3>
                    </div>

                    <!-- Konten Naratif Utama: Menggunakan Font Serif Klasik dengan Rata Kanan-Kiri -->
                    <div class="font-serif text-[15px] text-gray-800 leading-relaxed text-justify space-y-5 pt-2">
                        
                        <p class="indent-0">
                            <!-- Drop Cap Minimalis Hitam Elegan -->
                            <span class="font-sans float-left text-5xl font-black text-gray-900 leading-[0.8] pr-2 pt-1">S</span>aat pertama kali mendengar ada anak muda yang berkeinginan membukukan tentang beragam “warisan” kota Pontianak yang sebagian besar telah sirna, dalam hati saya mengatakan <span class="italic font-sans text-[14px] text-emerald-900 bg-emerald-100/60 px-1 py-0.5 rounded">“siapa pun yang merasa menjadi warga kota ini wajib mendukungnya sesuai kemampuan yang masing-masing miliki”</span>.
                        </p>

                        <p>
                            Tidak terkecuali saya sebagai salah satu warga Pontianak yang sangat peduli dengan nilai sejarah kota Pontianak merasakan ini merupakan ide cerdas dari seseorang warga yang tahu cara menghargai sejarah kotanya.
                        </p>

                        <p>
                            Ini merupakan aset berharga bagi perjalanan kota Pontianak dimasa mendatang, dengan tidak meninggalkan masa lalunya. Keberadaan buku ini menjadi penting dan sangat berguna bagi anak cucu kita kelak, yang merupakan potret catatan sejarah kota Pontianak yang sangat berguna bagi mereka kelak, dan harus kita kenang sebagai bentuk penghargaan kepada para pendahulu kita, kepada para perintis kota ini. Tanpa mereka, tidak akan pernah ada yang namanya kota Pontianak di peta Kalimantan Barat atau bahkan di peta dunia sekalipun.
                        </p>

                        <p>
                            Sebagai sebuah organisasi, Pemuda Melayu Kota Pontianak sangat berharap keberadaan heritage ini perlu dijaga, bukan hanya dari sisi struktur bangunan atau fisiknya saja, tetapi juga sebagai warisan adat dan budaya kota Pontianak.
                        </p>

                    </div>
                </div>
            </section>
            <section class="bg-white rounded-3xl border border-gray-200/80 shadow-md overflow-hidden mt-8 max-w-4xl mx-auto">
                <div class="px-6 py-8 md:px-12 md:py-10 flex flex-col space-y-6">
                    
                    <div class="text-center md:text-left border-b border-gray-100 pb-4">
                        <h3 class="text-2xl font-sans font-bold text-emerald-600 tracking-wide">
                            Mengurai Makna
                        </h3>
                    </div>

                    <div class="font-serif text-[15px] text-gray-700 leading-relaxed text-justify">
                        <p>
                            Semoga apa yang diperbuat oleh adinda Ahmad Asma dZ dengan segala kekurangan dan kelebihannya telah bersusah payah membukukan ragam warisan kota kita tercinta ini, maupun apa yang diberikan oleh kita semua hingga terbitnya buku Pontianak Heritage ini, dicatat sebagai amal jariah oleh Allah SWT. Aamiin Yaa Rabbal Alamiin..
                        </p>
                    </div>

                    <div class="bg-slate-50 border-y-2 border-dashed border-slate-200 py-6 px-8 rounded-2xl max-w-xl mx-auto w-full my-2">
                        <div class="font-serif italic text-base text-slate-800 text-center space-y-1 md:tracking-wide">
                            <p class="before:content-['“'] before:text-slate-400 before:mr-0.5">Dari Masjid Jami’ ke Batulayang</p>
                            <p>Melihat sang Putri berselendang mayang</p>
                            <p>Jikalau marwah Melayu ingin tetap terpandang</p>
                            <p class="after:content-['”'] after:text-slate-400 after:ml-0.5">Adat dan budaya jangan kite lupakan</p>
                        </div>
                    </div>

                    <div class="pt-2 flex flex-col items-end text-right font-sans">
                        <div class="border-t border-gray-100 pt-4 w-full md:w-64">
                            <p class="font-extrabold text-gray-900 text-base">Ir. Rustammy Atmo</p>
                            <p class="text-xs font-semibold text-slate-500 mt-0.5 uppercase tracking-wider">Ketua DPD Pemuda Melayu Kota Pontianak</p>
                        </div>
                    </div>

                </div>
            </section>
            <section class="bg-[#f4f7ee] rounded-3xl border border-emerald-200/60 shadow-sm overflow-hidden mt-8">
                <div class="px-6 py-8 md:px-12 md:py-12 flex flex-col space-y-6">
                    
                    <div class="text-center border-b border-emerald-900/10 pb-5">
                        <h2 class="text-4xl font-sans font-black text-emerald-750 tracking-tight">Pontianak</h2>
                    </div>

                    <div class="font-serif text-[15px] text-[#2d3f33] leading-relaxed text-justify space-y-5">
                        
                        <p>
                            <strong class="text-emerald-950 font-bold">Kota Pontianak</strong>, merupakan ibukota propinsi Kalimantan Barat, mencakup wilayah seluas 107,82 Km² terdiri dari 6 kecamatan. Pontianak tepat dilintasi garis Khatulistiwa yaitu pada 0° 02' 24" LU - 0° 05' 37" LS dan 109° 16' 25" BT - 109° 23' 01" BT. Kota Pontianak disebut juga dengan kota Khatulistiwa.
                        </p>

                        <p>
                            <strong class="text-emerald-950 font-bold">Kota Pontianak</strong>, awal mulanya didirikan dengan struktur masyarakat, wilayah pada tahun 1771 dan kemudian menjadi pemerintahan kesultanan pada tahun 1778 oleh Syarif Abdurrahman Al-Kadrie.
                        </p>

                        <p>
                            Sejarah memulai, menjelang subuh 14 Rajab 1184 H atau 23 Oktober 1771, Syarif Abdurrahman memimpin dan menebas hutan diujung delta Sungai Kapuas dan Sungai Landak. Mendirikan tempat beribadah dan rumah sederhana di daerah itu. Dan kemudian tempat itu pun dinamakan Pontianak.
                        </p>

                        <p class="font-sans font-bold text-sm uppercase tracking-wide text-emerald-900 pt-2">
                            Ada beberapa sumber tulisan mengenai berdirinya Kota Pontianak, antara lain :
                        </p>

                        <ul class="space-y-4 pl-4 md:pl-6 list-none font-serif text-[14.5px]">
                            <li class="relative pl-6 before:content-['•'] before:absolute before:left-0 before:text-emerald-700 before:font-bold">
                                Pada hari Rabu, tanggal 14 Rajab 1185 H atau bertepatan dengan 23 Oktober 1771 dijadikan sebagai hari berdirinya daerah Pontianak.
                            </li>
                            <li class="relative pl-6 before:content-['•'] before:absolute before:left-0 before:text-emerald-700 before:font-bold">
                                <span class="italic text-emerald-950">P. J. Veth dalam Borneo's Westerafdeeling I;</span> 15 menuliskan bahwa Syarif Abdurrahman berangkat meninggalkan Mempawah tanggal 23 November 1771 beserta pengikutnya mendirikan masjid. Tanggal 7 Januari 1772 di wilayah delta pertemuan Sungai Kapuas Kecil dan Sungai Landak, Syarif Abdurrahman dan pengikutnya membuka hutan dan mendirikan pemukiman baru.
                            </li>
                            <li class="relative pl-6 before:content-['•'] before:absolute before:left-0 before:text-emerald-700 before:font-bold">
                                Menurut <span class="italic text-emerald-950">J. H. Meyer</span>, Syarif Abdurrahman Berangkat dari Mempawah menyusuri sungai Kapuas 25 November 1771.
                            </li>
                            <li class="relative pl-6 before:content-['•'] before:absolute before:left-0 before:text-emerald-700 before:font-bold">
                                <span class="italic text-emerald-950">Yacob Ozing dalam bukunya : De Economische Ontwikkeling de Westerafdeeling Van Borneo ene Bevolkings Rubier Culture</span>, menafsirkan pendapat Schriter yang menulis bahwa hari jadi kota Pontianak jatuh pada hari Rabu tanggal 23 Oktober 1771.
                            </li>
                        </ul>

                        <p class="pt-2">
                            Penamaan Pontianak sebagai nama dari daerah (kota) ini sendiri dapat dilihat dari beberapa perspektif :
                        </p>

                        <p>
                            <strong class="text-emerald-950 font-bold">Pertama</strong>, cerita-cerita rakyat (folklor) penamaan Pontianak berawal dari istilah hantu <span class="italic font-sans text-sm">Kuntilanak</span> atau hantu perempuan. Adanya hantu <span class="italic font-sans text-sm">Kuntilanak</span> yang konon dulunya banyak terdapat di daerah delta pertemuan Sungai Kapuas Besar, Sungai Kapuas Kecil dan Sungai Landak.
                        </p>

                        <p>
                            <strong class="text-emerald-950 font-bold">Alkisah</strong>, ketika awal rombongan Syarif Abdurrahman sampai di sekitar delta hutan. Banyak gangguan dan suara-suara yang menakutkan. Gangguan pada malam hari itu yang ditafsirkan sebagai hantu <span class="italic font-sans text-sm">Kuntilanak</span>, membuat takut kerabat serta anak buah perombongan. Keesokan harinya mereka tidak meneruskan perjalanan, sambil memperhatikan situasi sekitarnya.
                        </p>

                    </div>
                </div>
            </section>
            <section class="bg-slate-50 rounded-3xl border border-slate-200 shadow-sm overflow-hidden mt-8">
                <div class="px-6 py-8 md:px-12 md:py-12 flex flex-col space-y-6">
                    
                    <!-- Konten Utama Cerita Rakyat (Folklore & Teori Lainnya) -->
                    <div class="font-serif text-[15px] text-slate-800 leading-relaxed text-justify space-y-5">
                        
                        <p>
                            Pada siang hari pun mereka ditakuti oleh suara-suara mengerikan. Malam berikutnya rombongan mereka pun mendapatkan gangguan-gangguan dari suara serupa hantu dan gangguan lainnya. Karena selalu diganggu oleh hantu jahat yang dimanifestasikan hantu kuntilanak tersebut. Kemudian sebagai upaya untuk mengusirnya, Syarif Abdurrahman menembakkan meriam. Dari cerita itulah, kemudian daerah ini disebut dengan pontianak. Perspektif ini tersebar luas sebagai asal usul penamaan kota pontianak.
                        </p>

                        <p>
                            Ada pendapat yang mengatakan, gangguan yang menakutkan itu sesungguhnya adalah para perampok dan penjahat yang banyak terdapat diperairan sungai Kapuas dan sungai Landak. Daerah ini memang sebelumnya dikenal strategis sekaligus rawan. Sebagai tempat bersembunyi para perampok dan penjahat didaerah pertigaan pertemuan kedua sungai itu.
                        </p>

                        <!-- Blok Perspektif Kedua: Modifikasi Tampilan Indikator Teks -->
                        <div class="bg-white p-5 rounded-2xl border border-slate-100 shadow-xs space-y-2">
                            <p>
                                <span class="inline-block font-sans text-xs font-bold uppercase tracking-wider bg-indigo-50 text-indigo-700 px-2.5 py-1 rounded-md mb-1">Kedua</span>
                                , cerita rakyat (folklor) melayu yang mendasari penamaan pontianak berasal atau artinya ayunan anak. Konon, cerita ini berdasar pada cerita ketika ketika Masjid Jami' didirikan ada banyak ayunan anak dari keluarga yang dipekerjakan. <span class="font-sans text-xs text-slate-500 italic">(Ja' achmad dan J U Lontaan)</span>
                            </p>
                        </div>

                        <!-- Blok Perspektif Ketiga -->
                        <div class="bg-white p-5 rounded-2xl border border-slate-100 shadow-xs space-y-3">
                            <p>
                                <span class="inline-block font-sans text-xs font-bold uppercase tracking-wider bg-amber-50 text-amber-850 px-2.5 py-1 rounded-md mb-1">Ketiga</span>
                                , penamaan Pontianak berasal dari keberadaan nama 'pohon punti'. Penyebutan pohon punti, sebagai bukti sejarah keberadaannya termaktub pada baris keempat belas surat antara Husein bin Abdul Rahman Al-Aidrus (rakyat negeri Pontianak) kepada Sultan Syarif Yusuf Al-Kadrie. Tertulis.....
                            </p>

                            <!-- Kutipan Isi Isi Surat / Teks Khusus Kuno -->
                            <div class="bg-slate-100/70 border-l-4 border-slate-400 p-4 font-serif text-[14px] text-slate-700 italic rounded-r-xl leading-relaxed">
                                Maka di dalam itu watasan telah ada juga pohon-pohon hamba tuanku yang sudah bertanam memang disitu, embawang ada 3 dan rambai 8 dan keranji 2, dan buluh 7 rumpun dan pohon punti 1 dan pohon kandis 1 dan beberapa pula sagu yang hamba tuanku tanam di dalam sungai itu ada 6 rumpun yang besar dan yang kecil ada lebih kurang dari tiga ratus batang. <span class="font-sans text-xs text-slate-500 not-italic block mt-1.5">(Henry Chambert Loir. Sultan, Pahlawan dan Hakim, 2011, hal 107).</span>
                            </div>
                        </div>

                        <p>
                            Berkenaan juga dengan kata ponti bersumber dari kata pon dan ti yang berarti 'pohon tinggi'. Tentu sangat beralasan, sebagai kawasan yang ada di pulau Kalimantan tentunya di daerah ini dulunya banyak terdapat pohon-pohon yang tinggi. Ponti untuk Pohon Tinggi juga menjadi sesuai dengan manifestasi Pohon Punti diatas. Orang tua-tua bilang pohon ini tinggi dan besar walau tidak juga menjadi besar sekali. Penyebutan pontianak pun bagi sebagian masyarakat di tepian sungai Kapuas Kecil dulunya hingga sebagian sekarang ini dengan sebutan puntianak.
                        </p>
                    </div>
                </div>
            </section>
            <section class="bg-[#fbfaf7] rounded-3xl border border-stone-200/80 shadow-xs overflow-hidden mt-8">
                <div class="px-6 py-8 md:px-12 md:py-12 flex flex-col space-y-6">
                    
                    <!-- Isi Materi Sambungan Teks -->
                    <div class="font-serif text-[15px] text-stone-850 leading-relaxed text-justify space-y-5">
                        
                        <!-- Perspektif Keempat (Kelanjutan dari lembar sebelumnya) -->
                        <p>
                            <span class="italic font-bold text-stone-950">Keempat</span>, Pontianak juga dapat berasal dari kata <span class="italic">Pontian</span>. Nama Pontian sendiri adalah pelafadzan dari kata <span class="italic">perhentian</span>. ‘PERHENTIAN’ yang bermaksud dengan tempat persinggahan. Hal ini juga sangat beralasan, karena delta Sungai Kapuas dan Sungai Landak ini sangat strategis sebagai jalur perdagangan dari hilir (luar Kalimantan) sebelah barat daya menuju hulu (pedalaman) dan juga tempat kapal-kapal pedagang yang hendak berlindung dari badai dan ombak besar di laut Cina Selatan, atau laut Natuna. Ilustrasi sederhananya adalah setelah kapal-kapal tersebut mengarungi laut, kemudian masuk ke muara sungai dan beristirahat sejenak di daerah ini. Sebelum kemudian melanjutkan perjalanan lebih ke dalam.
                        </p>

                        <p>
                            Penamaan nama daerah dari asal muasal penamaan Pontian ini juga terdapat di salah satu daerah di Negeri Johor, Malaysia. Terletak 62 kilometer dari Johor Bahru, ibu kota negeri Johor. Ibu kotanya disebut Pontian Kechil. Daerah Pontian, dari kata pada Pontian “perhentian” ini merupakan sebuah tanjung yang digunakan sebagai daerah perhentian kapal-kapal pedagang yang hendak berlindung dari badai dan ombak besar. Dibangunkan oleh saudagar dari Singapura yaitu Syed Alsagoff. Selain itu, nama Pontian sebagai nama daerah juga terdapat di kecamatan Lubuk Batu Jaya Kabupaten Indragiri Hulu, Riau, Indonesia, di sana terdapat nama desa Pontian Mekar.
                        </p>

                        <!-- Perspektif Kelima (Aksen Tag Khusus Etnis/Bahasa) -->
                        <div class="border-l-2 border-amber-600 pl-4 my-2">
                            <p>
                                <span class="italic font-bold text-stone-950">Kelima</span>, Pontianak dalam pelafalan bahasa Mandarin adalah <span class="italic font-sans text-[14px] font-semibold text-amber-900">Kun Tian</span> (kun tien, dalam pelafalan Hanyu Pinyin, <span class="italic">kūn tiān</span> dalam bahasa mandarin). Kata <span class="italic">kun tian</span> dapat diartikan dengan ‘tempat perhentian; persinggahan’. Dialek pelafadzan <span class="italic">kun tian</span> bagi sebagian besar masyarakat Tionghoa biasanya ada sedikit penambahan lafaz tanpa menambah arti, hanya sebatas dengung kata terakhir saja. Seperti: tak ada uang (nga), naik oto (aa), (a), begitu juga <span class="italic">kun tian</span> (na). Dari pelafadzan inilah kemudian menjadi Pontianak. Sampai sekarang pun sebagian besar orang tua-tua dari masyarakat Tionghoa masih menggunakan Kun Tian untuk menyebutkan Pontianak. Misalnya jika mereka ditanya “mau kemana?”, kemungkinan dia akan menjawab “ke Kun Tian” (na).
                            </p>
                        </div>

                        <!-- Garis Pembatas Halus Menuju Bab Kesimpulan -->
                        <hr class="border-stone-200 my-4" />

                        <!-- Bagian Refleksi Akhir (Berdasarkan image_0f6563.png) -->
                        <p>
                            Penulisan beberapa perspektif atau sudut pandang dalam asal muasal penamaan Pontianak ini menjadi menarik. Sebagai sebuah penjabaran, bahwa ia juga tidak berasal dari hal yang tunggal, dan tentu juga bukan berarti satu perspektif menjadi benar dibanding dengan lainnya. Begitu juga sebaliknya.
                        </p>

                        <!-- Kotak Blok Intisari Kesatuan Toponimi (Highlight Ringkasan) -->
                        <div class="bg-amber-50/50 rounded-2xl p-5 border border-amber-100 space-y-3 shadow-2xs">
                            <p>
                                Atau sebenarnya penamaan Pontianak merupakan satu kesatuan dari hal tersebut. Misal: Kata Pontianak yang kemudian menjadi nama Kota Pontianak berasal dari satu daerah persinggahan, perhentian (Pontian), yang oleh masyarakat tionghoa disebut dengan “Kun Tian” (na). Dimana banyak terdapat pohon puntit atau pohon-pohon yang tinggi (ponti), serta awalnya banyak mitos penampakan hantu perempuan menyeramkan (kuntilanak).
                            </p>
                        </div>

                        <p>
                            Pada titik inilah toponimi (cabang antropologi tentang nama tempat, asal-usul, arti, penggunaan, dan tipologinya) di Pontianak ini akan menemukan titik yang lebih cerah. Yakni ketika mitos, cerita rakyat dan hal-hal yang bersifat irasional dapat bertemu dan saling melengkapi dengan penjelasan yang bersifat nalar, melalui narasi ilmiah, data sejarah dan rasional.
                        </p>

                        <!-- Penutup Kata Harapan -->
                        <p class="pt-2 italic font-medium text-stone-600 tracking-wide">
                            Semoga
                        </p>

                    </div>
                </div>
            </section>
            </main>
    <footer class="bg-gray-950 text-gray-500 text-center py-8 text-sm">
        © 2026 Pontianak Heritage Movement. All rights reserved.
    </footer>

</body>
</html>