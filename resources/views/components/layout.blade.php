@props(['hideFooter' => false])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kampung Budaya Ketawang Gede</title>

    <!-- Font Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">

    <!-- Icons -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    {{-- Memuat semua file aset yang dibutuhkan --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .bg-batik-pattern {
            background-color: #463C38;
            background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%239C92AC' fill-opacity='0.08'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }
        .no-scrollbar::-webkit-scrollbar { display: none; }
        .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
    </style>
</head>
<body class="bg-[#FFFBE6] text-gray-800 font-sans antialiased selection:bg-[#3E2F2B] selection:text-white flex flex-col min-h-screen">
    
    <!-- NAVBAR (SELALU MUNCUL) -->
    <nav class="w-full sticky top-0 z-50 bg-[#FFFBE6]/95 backdrop-blur-sm border-b border-[#E6DCC3] shadow-sm">
        <div class="max-w-[90rem] mx-auto px-6 h-20 flex justify-between items-center">
            
            <div class="flex items-center gap-8 lg:gap-10">
                <!-- LOGO -->
                <a href="/" class="flex-shrink-0 hover:scale-105 transition duration-300">
                    <img src="https://i.ibb.co.com/4w7k87yk/Group-23.png" alt="Logo Kampung Budaya" class="h-12 w-auto object-contain">
                </a>

                <!-- MENU LINKS DESKTOP -->
                <ul class="hidden lg:flex items-center gap-6 text-[#3E2F2B] font-medium text-[14px]">
                    <li><a href="/" class="hover:text-[#A85D36] transition duration-300">Beranda</a></li>
                    <li><a href="/about" class="hover:text-[#A85D36] transition duration-300">Tentang kami</a></li>
                    <li><a href="/galeri-seni" class="hover:text-[#A85D36] transition duration-300">Galeri Seni</a></li>
                    <li><a href="/pentas-seni" class="hover:text-[#A85D36] transition duration-300">Pentas Seni</a></li>
                    <li><a href="/ulasan" class="hover:text-[#A85D36] transition duration-300">Ulasan</a></li>
                    <li><a href="/kuliner" class="hover:text-[#A85D36] transition duration-300">Kuliner</a></li>
                </ul>
            </div>

            <div class="flex items-center gap-3">
                <!-- LOGIKA AUTHENTICATION (NAVBAR PINTAR) -->
                @guest
                    <!-- Jika BELUM Login -->
                    <a href="{{ route('register') }}" class="text-sm font-semibold text-[#3E2F2B] hover:text-[#A85D36] transition px-3 py-2">Register</a>
                    <a href="{{ route('login') }}" class="px-7 py-2 bg-[#3E2F2B] text-white rounded-full text-sm font-semibold hover:bg-[#2A1F1C] hover:shadow-md transition-all duration-300">Log in</a>
                @endguest

                @auth
                    <!-- Jika SUDAH Login -->
                    <div class="relative group">
                        <!-- Trigger: Nama User -->
                        <button class="flex items-center gap-2 text-[#3E2F2B] font-bold hover:text-[#A85D36] transition px-3 py-2">
                            <span>Hi, {{ Str::limit(auth()->user()->name, 10) }}</span>
                            <ion-icon name="chevron-down-outline" class="text-sm"></ion-icon>
                        </button>

                        <!-- Dropdown Menu -->
                        <div class="absolute right-0 mt-2 w-48 bg-white rounded-xl shadow-xl py-2 invisible opacity-0 group-hover:visible group-hover:opacity-100 transition-all duration-300 z-50 transform origin-top-right border border-gray-100">
                            
                            <!-- 1. Menu Khusus Admin -->
                            @if(auth()->user()->role === \App\Enums\Role::ADMIN)
                                <a href="{{ route('admin.dashboard') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-orange-50 hover:text-orange-600 transition">
                                    <div class="flex items-center gap-2">
                                        <ion-icon name="grid-outline"></ion-icon>
                                        Admin Panel
                                    </div>
                                </a>
                                <div class="border-b border-gray-100 my-1"></div>
                            @endif

                            <!-- 2. Tombol Logout -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="w-full text-left block px-4 py-2 text-sm text-red-600 hover:bg-red-50 transition flex items-center gap-2">
                                    <ion-icon name="log-out-outline"></ion-icon>
                                    Logout
                                </button>
                            </form>
                        </div>
                    </div>
                @endauth

                <!-- Hamburger Menu Mobile -->
                <button id="mobile-menu-btn" class="lg:hidden text-[#3E2F2B] text-2xl focus:outline-none ml-2">
                    <ion-icon name="menu"></ion-icon>
                </button>
            </div>
        </div>

        <!-- MOBILE MENU (Hidden by default) -->
        <div id="mobile-menu" class="hidden lg:hidden bg-[#FFFBE6] border-t border-[#E6DCC3] absolute w-full left-0 shadow-lg p-4 flex flex-col gap-4 z-40">
            <a href="/" class="text-[#3E2F2B] font-medium hover:text-[#A85D36]">Beranda</a>
            <a href="/about" class="text-[#3E2F2B] font-medium hover:text-[#A85D36]">Tentang kami</a>
            <a href="/galeri-seni" class="text-[#3E2F2B] font-medium hover:text-[#A85D36]">Galeri Seni</a>
            <a href="/pentas-seni" class="text-[#3E2F2B] font-medium hover:text-[#A85D36]">Pentas Seni</a>
            <a href="/ulasan" class="text-[#3E2F2B] font-medium hover:text-[#A85D36]">Ulasan</a>
            <a href="/kuliner" class="text-[#3E2F2B] font-medium hover:text-[#A85D36]">Kuliner</a>
        </div>
    </nav>

    <!-- MAIN CONTENT -->
    <main class="pt-8 flex-grow">
        {{ $slot }}
    </main>

    <!-- FOOTER (Hanya muncul jika 'hideFooter' bernilai false) -->
    @if(!$hideFooter)
    <footer class="bg-batik-pattern text-white pt-16 pb-10 rounded-t-[3rem] mt-20 w-full relative">
        <div class="absolute inset-0 bg-black/20 rounded-t-[3rem]"></div>
        
        <div class="relative z-10 max-w-[85rem] mx-auto px-6 md:px-10 flex flex-col md:flex-row justify-between items-end gap-8">
            <div class="w-full md:w-1/2">
                <h3 class="text-2xl font-bold border-b-2 border-white/30 pb-2 mb-6 inline-block">
                    Kampung Budaya Ketawang Gede
                </h3>
                <div class="space-y-4 text-gray-200 font-light">
                    <p class="leading-relaxed max-w-md">
                        Jalan Kerto Pamuji, Kelurahan Ketawanggede,<br>
                        Kecamatan Lowokwaru Kota Malang.
                    </p>
                    <a href="https://wa.me/6285727112139" target="_blank" class="flex items-center gap-2 w-fit hover:text-green-400 transition-colors duration-300 group">
                        <ion-icon name="logo-whatsapp" class="text-xl group-hover:scale-110 transition"></ion-icon>
                        <span class="font-medium">+62 85727112139</span>
                    </a>
                </div>
            </div>
            <div class="flex flex-col gap-4 w-full md:w-auto">
                <a href="https://www.instagram.com/kampungbudoyo45" class="flex items-center gap-3 group text-gray-200 hover:text-white transition">
                    <div class="w-8 h-8 flex justify-center items-center bg-white/10 rounded-full group-hover:bg-white group-hover:text-pink-600 transition duration-300">
                        <ion-icon name="logo-instagram" class="text-xl"></ion-icon>
                    </div>
                    <span class="text-sm font-medium">kampungbudoyo45</span>
                </a>
                <a href="https://www.tiktok.com/@kampungbudoyo" class="flex items-center gap-3 group text-gray-200 hover:text-white transition">
                    <div class="w-8 h-8 flex justify-center items-center bg-white/10 rounded-full group-hover:bg-white group-hover:text-black transition duration-300">
                        <ion-icon name="logo-tiktok" class="text-xl"></ion-icon>
                    </div>
                    <span class="text-sm font-medium">kampungbudoyo</span>
                </a>
                <a href="https://youtu.be/mQuS2OWBAFY" class="flex items-center gap-3 group text-gray-200 hover:text-white transition">
                    <div class="w-8 h-8 flex justify-center items-center bg-white/10 rounded-full group-hover:bg-white group-hover:text-red-600 transition duration-300">
                        <ion-icon name="logo-youtube" class="text-xl"></ion-icon>
                    </div>
                    <span class="text-sm font-medium">kampungbudoyo45</span>
                </a>
            </div>
        </div>
        <div class="relative z-10 text-center mt-12 pt-6 border-t border-white/10 text-xs text-gray-400">
            &copy; 2025 Kampung Budaya Ketawang Gede. All rights reserved.
        </div>
    </footer>
    @endif

    <script>
        const menuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        if(menuBtn && mobileMenu){
            menuBtn.addEventListener('click', () => { mobileMenu.classList.toggle('hidden'); });
        }
    </script>
    
    @stack('scripts')
</body>
</html>