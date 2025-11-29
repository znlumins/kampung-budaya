<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        /* Pattern Batik Halus untuk background gelap */
        .bg-batik-pattern {
            background-color: #463C38;
            background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='https://i.ibb.co.com/xSK32tCj/bunga-bunga.png'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%239C92AC' fill-opacity='0.08'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }
        /* Scrollbar hide utility */
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }
        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
</head>
<body class="bg-kb-cream text-gray-800 font-sans antialiased selection:bg-kb-dark selection:text-white">
    
    <!-- Navbar -->
    <nav class="max-w-[90rem] mx-auto px-6 py-6 flex justify-between items-center relative z-20">
        <!-- Kiri: Kosong atau Logo (di desain kosong/hanya menu) -->
        <div class="hidden md:block w-32"></div>

        <!-- Tengah: Menu Utama -->
        <ul class="flex gap-8 text-sm font-medium text-gray-700">
            <li><a href="#" class="hover:text-black hover:underline underline-offset-4 decoration-2">Beranda</a></li>
            <li><a href="#" class="hover:text-black hover:underline underline-offset-4 decoration-2">Tentang kami</a></li>
            <li><a href="#" class="hover:text-black hover:underline underline-offset-4 decoration-2">Galeri Seni</a></li>
            <li><a href="#" class="hover:text-black hover:underline underline-offset-4 decoration-2">Pentas Seni</a></li>
            <li><a href="#" class="hover:text-black hover:underline underline-offset-4 decoration-2">Ulasan</a></li>
            <li><a href="#" class="hover:text-black hover:underline underline-offset-4 decoration-2">Kuliner</a></li>
        </ul>

        <!-- Kanan: Login & Register -->
        <div class="flex gap-4 w-auto md:w-32 justify-end">
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/dashboard') }}" class="font-semibold hover:text-gray-900">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="font-semibold hover:text-black">Log in</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="px-4 py-1.5 bg-kb-dark text-white rounded-full text-sm font-medium hover:bg-black transition">Register</a>
                    @endif
                @endauth
            @endif
        </div>
    </nav>

    <main>
        {{ $slot }}
    </main>
    
    <div class="h-10"></div> <!-- Spacer bottom -->
</body>
</html>