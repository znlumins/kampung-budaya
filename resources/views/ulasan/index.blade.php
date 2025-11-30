<x-layout>

    <!-- Container Utama -->
    <div class="max-w-[90rem] mx-auto px-6 py-10">

        <div class="flex flex-col lg:flex-row gap-8 items-start">

            <!-- BAGIAN KIRI: SIDEBAR INFO (Sticky) -->
            <div class="w-full lg:w-1/3 bg-[#756A60] rounded-[2.5rem] p-10 text-white shadow-2xl sticky top-24">
                <h1 class="text-4xl md:text-5xl font-bold leading-tight mb-6">
                    Ulasan <br>
                    Kampung Budaya <br>
                    Ketawang Gede
                </h1>

                <p class="text-white/90 text-lg font-light mb-12">
                    Tuangkan Saran Dan kritikan!
                </p>

                <div class="flex gap-4">
                    <!-- Tombol Tambah (Ke Form) -->
                    <a href="/ulasan/tambah" class="px-8 py-3 bg-[#F5E6CA] text-[#3E2F2B] rounded-full font-bold hover:bg-white transition duration-300 shadow-lg">
                        Tambah
                    </a>
                    
                    <!-- Tombol Kembali (Ke Home) -->
                    <a href="/" class="px-8 py-3 bg-[#F5E6CA] text-[#3E2F2B] rounded-full font-bold hover:bg-white transition duration-300 shadow-lg">
                        Kembali
                    </a>
                </div>
            </div>

            <!-- BAGIAN KANAN: GRID ULASAN (Scrollable) -->
            <div class="w-full lg:w-2/3 grid grid-cols-1 md:grid-cols-2 gap-6">

                <!-- Loop Review Card (Contoh Data Dummy) -->
                @for ($i = 0; $i < 6; $i++)
                <div class="bg-[#756A60] p-6 rounded-[2rem] text-white shadow-lg border border-white/10 hover:-translate-y-1 transition duration-300">
                    <div class="flex gap-4 items-center mb-4">
                        <!-- Avatar -->
                        <div class="w-14 h-14 bg-gray-300 rounded-full flex items-center justify-center overflow-hidden">
                            <ion-icon name="person" class="text-3xl text-gray-600"></ion-icon>
                        </div>
                        <!-- Info User -->
                        <div>
                            <h3 class="font-bold text-lg">Putri Salsabila</h3>
                            <p class="text-xs text-gray-300">Pengunjung</p>
                            <!-- Bintang -->
                            <div class="flex text-yellow-400 text-sm mt-1">
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                            </div>
                        </div>
                    </div>
                    
                    <div class="w-full h-[1px] bg-white/30 my-3"></div>

                    <p class="text-sm text-gray-200 leading-relaxed font-light">
                        Pentas Seni nya kerennn bangett, kemaren liar dan gongg banget, apa lagi keroncongnyaa... behhhh. jadi pengin nonton terussss, intinya Penonton setiaa kl ada acara di Kampung Budoyo Ketawang Gede.....
                    </p>
                </div>
                @endfor

            </div>

        </div>

    </div>

</x-layout>