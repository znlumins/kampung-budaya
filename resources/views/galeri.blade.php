<x-layout>

    <!-- Container Utama -->
    <div class="max-w-[85rem] mx-auto px-6 py-10 md:py-14">

        <!-- HEADER: Tombol Back & Judul -->
        <div class="flex items-center gap-6 mb-12">
            <!-- Tombol Back -->
            <a href="/" class="w-12 h-12 flex items-center justify-center bg-[#6B5E55] text-white rounded-full hover:bg-black transition duration-300 shadow-lg">
                <ion-icon name="arrow-back" class="text-2xl"></ion-icon>
            </a>
            
            <!-- Judul Page -->
            <h1 class="text-3xl md:text-4xl font-bold text-[#3E2F2B] border-b-2 border-black pb-2 inline-block w-full max-w-md">
                Galeri Seni
            </h1>
        </div>

        <!-- MASONRY LAYOUT (3 KOLOM) -->
        <!-- Kita membagi layout menjadi 3 kolom vertikal agar kartu bisa tersusun rapi dari atas ke bawah -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 items-start">

            <!-- ================= KOLOM 1 (KIRI) ================= -->
            <div class="flex flex-col gap-10">
                
                <!-- Card 1: NBS Plat N (Vertical) -->
                <div class="group">
                    <div class="rounded-[2.5rem] overflow-hidden shadow-xl mb-4 h-[450px]">
                        <img src="https://images.unsplash.com/photo-1514533450685-4493e01d1fdc?q=80&w=600" 
                             class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    </div>
                    <h3 class="text-xl font-bold text-[#3E2F2B] mb-2">NBS Plat N</h3>
                    <div class="h-[1px] bg-black/80 w-full mb-3"></div>
                    <p class="text-sm text-gray-700 leading-snug">
                        Aksara FIB merupakan hasil dari kolaborasi Fakultas ilmu budaya Universitas Brawijaya dengan kampung Budoyo Ketawang Gede.
                    </p>
                </div>

                <!-- Card 2: Aksara FIB (Gong/Vertical) -->
                <div class="group">
                    <div class="rounded-[2.5rem] overflow-hidden shadow-xl mb-4 h-[500px]">
                        <img src="https://images.unsplash.com/photo-1519892300165-cb5542fb47c7?q=80&w=600" 
                             class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    </div>
                    <h3 class="text-xl font-bold text-[#3E2F2B] mb-2">Aksara FIB</h3>
                    <div class="h-[1px] bg-black/80 w-full mb-3"></div>
                    <p class="text-sm text-gray-700 leading-snug">
                        Aksara FIB merupakan hasil dari kolaborasi Fakultas ilmu budaya Universitas Brawijaya dengan kampung Budoyo Ketawang Gede.
                    </p>
                </div>

            </div>


            <!-- ================= KOLOM 2 (TENGAH) ================= -->
            <div class="flex flex-col gap-10">

                <!-- Card 3: Keroncong (Horizontal) -->
                <div class="group">
                    <div class="rounded-[2.5rem] overflow-hidden shadow-xl mb-4 h-[250px]">
                        <img src="https://images.unsplash.com/photo-1511379938547-c1f69419868d?q=80&w=600" 
                             class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    </div>
                    <h3 class="text-xl font-bold text-[#3E2F2B] mb-2">Keroncong</h3>
                    <div class="h-[1px] bg-black/80 w-full mb-3"></div>
                    <p class="text-sm text-gray-700 leading-snug">
                        Aksara FIB merupakan hasil dari kolaborasi Fakultas ilmu budaya Universitas Brawijaya dengan kampung Budoyo Ketawang Gede.
                    </p>
                </div>

                <!-- Card 4: Aksara FIB (Painting/Vertical) -->
                <div class="group">
                    <div class="rounded-[2.5rem] overflow-hidden shadow-xl mb-4 h-[400px]">
                        <img src="https://images.unsplash.com/photo-1579783902614-a3fb39279c23?q=80&w=600" 
                             class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    </div>
                    <h3 class="text-xl font-bold text-[#3E2F2B] mb-2">Aksara FIB</h3>
                    <div class="h-[1px] bg-black/80 w-full mb-3"></div>
                    <p class="text-sm text-gray-700 leading-snug">
                        Aksara FIB merupakan hasil dari kolaborasi Fakultas ilmu budaya Universitas Brawijaya dengan kampung Budoyo Ketawang Gede.
                    </p>
                </div>

                <!-- Card 5: Aksara FIB (Mural/Horizontal) -->
                <div class="group">
                    <div class="rounded-[2.5rem] overflow-hidden shadow-xl mb-4 h-[250px]">
                        <img src="https://images.unsplash.com/photo-1634152962476-4b8a00e1915c?q=80&w=600" 
                             class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    </div>
                    <h3 class="text-xl font-bold text-[#3E2F2B] mb-2">Aksara FIB</h3>
                    <div class="h-[1px] bg-black/80 w-full mb-3"></div>
                    <p class="text-sm text-gray-700 leading-snug">
                        Aksara FIB merupakan hasil dari kolaborasi Fakultas ilmu budaya Universitas Brawijaya dengan kampung Budoyo Ketawang Gede.
                    </p>
                </div>

            </div>


            <!-- ================= KOLOM 3 (KANAN) ================= -->
            <div class="flex flex-col gap-10">

                <!-- Card 6: Tari Topeng (Horizontal) -->
                <div class="group">
                    <div class="rounded-[2.5rem] overflow-hidden shadow-xl mb-4 h-[250px]">
                        <img src="https://images.unsplash.com/photo-1516450360452-9312f5e86fc7?q=80&w=600" 
                             class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    </div>
                    <h3 class="text-xl font-bold text-[#3E2F2B] mb-2">Tari Topeng</h3>
                    <div class="h-[1px] bg-black/80 w-full mb-3"></div>
                    <p class="text-sm text-gray-700 leading-snug">
                        Aksara FIB merupakan hasil dari kolaborasi Fakultas ilmu budaya Universitas Brawijaya dengan kampung Budoyo Ketawang Gede.
                    </p>
                </div>

                <!-- Card 7: Keroncong (Singer/Vertical) -->
                <div class="group">
                    <div class="rounded-[2.5rem] overflow-hidden shadow-xl mb-4 h-[400px]">
                        <img src="https://images.unsplash.com/photo-1525926477800-7a3be5800fcb?q=80&w=600" 
                             class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    </div>
                    <h3 class="text-xl font-bold text-[#3E2F2B] mb-2">Keroncong</h3>
                    <div class="h-[1px] bg-black/80 w-full mb-3"></div>
                    <p class="text-sm text-gray-700 leading-snug">
                        Aksara FIB merupakan hasil dari kolaborasi Fakultas ilmu budaya Universitas Brawijaya dengan kampung Budoyo Ketawang Gede.
                    </p>
                </div>

                <!-- Card 8: Aksara FIB (Gamelan/Horizontal) -->
                <div class="group">
                    <div class="rounded-[2.5rem] overflow-hidden shadow-xl mb-4 h-[250px]">
                        <img src="https://images.unsplash.com/photo-1621884883497-2a49800b6399?q=80&w=600" 
                             class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    </div>
                    <h3 class="text-xl font-bold text-[#3E2F2B] mb-2">Aksara FIB</h3>
                    <div class="h-[1px] bg-black/80 w-full mb-3"></div>
                    <p class="text-sm text-gray-700 leading-snug">
                        Aksara FIB merupakan hasil dari kolaborasi Fakultas ilmu budaya Universitas Brawijaya dengan kampung Budoyo Ketawang Gede.
                    </p>
                </div>

            </div>

        </div>

    </div>

</x-layout>