<x-layout :hideFooter="true">

    <!-- Container Utama -->
    <div class="min-h-[85vh] flex items-center justify-center py-10 px-4">
        
        <!-- Card Wrapper -->
        <div class="flex flex-col md:flex-row w-full max-w-6xl bg-[#F5E6CA] rounded-[2.5rem] shadow-2xl overflow-hidden min-h-[600px]">
            
            <!-- BAGIAN KIRI: FORM INPUT -->
            <div class="w-full md:w-1/2 p-8 md:p-14 flex flex-col justify-center">
                
                <form action="#" method="POST" class="space-y-5">
                    @csrf
                    
                    <!-- Nama -->
                    <div class="space-y-1">
                        <label class="block text-sm font-medium text-black ml-1">Nama</label>
                        <input type="text" value="{{ auth()->user()->name ?? '' }}" readonly
                            class="w-full h-12 px-4 bg-[#756A60] text-white rounded-md border-none focus:ring-0 cursor-not-allowed opacity-80">
                    </div>

                    <!-- Status -->
                    <div class="space-y-1">
                        <label class="block text-sm font-medium text-black ml-1">Status</label>
                        <input type="text" placeholder="Contoh: Mahasiswa / Warga" 
                            class="w-full h-12 px-4 bg-[#756A60] text-white placeholder-gray-300 rounded-md border-none focus:ring-2 focus:ring-[#5C534B] focus:outline-none">
                    </div>

                    <!-- Rating Bintang -->
                    <div class="space-y-1">
                        <label class="block text-sm font-medium text-black ml-1">Rating</label>
                        <div class="w-full h-12 px-4 bg-[#756A60] rounded-md flex items-center gap-2">
                            <!-- Bintang Interaktif Sederhana -->
                            <button type="button" class="text-yellow-400 text-2xl hover:scale-110 transition"><ion-icon name="star"></ion-icon></button>
                            <button type="button" class="text-yellow-400 text-2xl hover:scale-110 transition"><ion-icon name="star"></ion-icon></button>
                            <button type="button" class="text-yellow-400 text-2xl hover:scale-110 transition"><ion-icon name="star"></ion-icon></button>
                            <button type="button" class="text-yellow-400 text-2xl hover:scale-110 transition"><ion-icon name="star"></ion-icon></button>
                            <button type="button" class="text-gray-400 text-2xl hover:text-yellow-400 hover:scale-110 transition"><ion-icon name="star"></ion-icon></button>
                        </div>
                    </div>

                    <!-- Deskripsi -->
                    <div class="space-y-1">
                        <label class="block text-sm font-medium text-black ml-1">Deskripsi</label>
                        <textarea rows="4" placeholder="Tulis ulasan anda disini..."
                            class="w-full p-4 bg-[#756A60] text-white placeholder-gray-300 rounded-md border-none focus:ring-2 focus:ring-[#5C534B] focus:outline-none resize-none"></textarea>
                    </div>

                    <!-- Tombol Action -->
                    <div class="pt-4 flex gap-4">
                        <a href="/ulasan" class="w-1/2 py-3 bg-[#756A60] text-white rounded-full font-bold hover:bg-[#5e544d] transition duration-300 text-center shadow-md">
                            Batal
                        </a>
                        <button type="submit" class="w-1/2 py-3 bg-[#756A60] text-white rounded-full font-bold hover:bg-[#5e544d] transition duration-300 shadow-md">
                            Kirim
                        </button>
                    </div>

                </form>
            </div>

            <!-- BAGIAN KANAN: STATIC INFO -->
            <div class="w-full md:w-1/2 bg-[#756A60] p-10 md:p-14 flex flex-col justify-center text-white relative">
                <h1 class="text-4xl md:text-5xl font-bold leading-tight mb-8">
                    Welcome To <br>
                    Kampung Budaya <br>
                    Ketawang Gede
                </h1>

                <p class="text-white/80 text-lg leading-relaxed font-light">
                    Silahkan tulis kesan, Pesan, Kritik, dan saran untuk Kampung Budoyo Ketawang Gede!
                </p>
            </div>

        </div>
    </div>

</x-layout>