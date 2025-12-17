<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Kampung Budaya</title>
    {{-- Memuat CSS dan JS dari Vite --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{-- Icon --}}
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
</head>
<body class="bg-gray-100 font-sans antialiased">

    <div class="flex h-screen overflow-hidden">
        
        <!-- SIDEBAR -->
        <aside class="w-64 bg-gray-900 text-white flex-shrink-0 hidden md:flex flex-col">
            <div class="p-6 border-b border-gray-800">
                <h2 class="text-2xl font-bold text-kb-orange">Admin Panel</h2>
                <p class="text-xs text-gray-400 mt-1">Kampung Budaya</p>
            </div>

            <nav class="flex-1 p-4 space-y-2 overflow-y-auto">
                <!-- Menu Dashboard -->
                <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-gray-800 transition {{ request()->routeIs('admin.dashboard') ? 'bg-kb-orange text-white' : 'text-gray-300' }}">
                    <ion-icon name="grid-outline" class="text-xl"></ion-icon>
                    <span class="font-medium">Dashboard</span>
                </a>

                <!-- Menu Users -->
                <a href="{{ route('admin.users.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-gray-800 transition {{ request()->routeIs('admin.users.*') ? 'bg-kb-orange text-white' : 'text-gray-300' }}">
                    <ion-icon name="people-outline" class="text-xl"></ion-icon>
                    <span class="font-medium">Manajemen Akun</span>
                </a>

                <!-- Menu Games -->
                <a href="{{ route('admin.games.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-gray-800 transition {{ request()->routeIs('admin.games.*') ? 'bg-kb-orange text-white' : 'text-gray-300' }}">
                    <ion-icon name="game-controller-outline" class="text-xl"></ion-icon>
                    <span class="font-medium">Manajemen Games</span>
                </a>

                <!-- Menu Ulasan -->
                <a href="{{ route('admin.ulasan.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-gray-800 transition {{ request()->routeIs('admin.ulasan.*') ? 'bg-kb-orange text-white' : 'text-gray-300' }}">
                    <ion-icon name="chatbox-ellipses-outline" class="text-xl"></ion-icon>
                    <span class="font-medium">Manajemen Ulasan</span>
                </a>
            </nav>

            <div class="p-4 border-t border-gray-800">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="w-full flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-red-600 text-red-400 hover:text-white transition">
                        <ion-icon name="log-out-outline" class="text-xl"></ion-icon>
                        <span class="font-medium">Logout</span>
                    </button>
                </form>
            </div>
        </aside>

        <!-- MAIN CONTENT -->
        <div class="flex-1 flex flex-col h-screen overflow-hidden">
            <!-- Header Mobile (Opsional) -->
            <header class="bg-white shadow-sm p-4 flex justify-between items-center md:hidden">
                <h1 class="font-bold text-xl">Admin Panel</h1>
                <button class="text-2xl"><ion-icon name="menu-outline"></ion-icon></button>
            </header>

            <!-- Content Area -->
            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100 p-6 md:p-8">
                @yield('content')
            </main>
        </div>

    </div>

</body>
</html>