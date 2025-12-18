<x-layout>

    <!-- Container Utama -->
    <div class="max-w-[85rem] mx-auto px-6 py-8">

        <!-- SECTION 1: HERO IMAGE (WAYANG SUKET) -->
        <div class="relative w-full h-[350px] md:h-[500px] rounded-[3rem] overflow-hidden shadow-xl mb-12 group">
            
            <!-- Gambar Utama (Wayang Suket) -->
            <img src="https://i.ibb.co.com/xSsygGNX/Rectangle-19.png?q=80&w=1200" 
                 alt="Kesenian Wayang Suket" 
                 class="w-full h-full object-cover object-center group-hover:scale-105 transition duration-700">

            <!-- Tombol Back (Pojok Kiri Atas) -->
            <a href="/" class="absolute top-8 left-8 w-12 h-12 bg-black/40 hover:bg-black/70 text-white rounded-full flex items-center justify-center backdrop-blur-sm transition-all duration-300 z-10">
                <ion-icon name="arrow-back" class="text-2xl"></ion-icon>
            </a>
            
            <!-- Overlay tipis agar gambar menyatu -->
            <div class="absolute inset-0 bg-black/10"></div>
        </div>


        <!-- SECTION 2: TEXT CONTENT -->
        <div class="max-w-4xl mb-16">
            <h1 class="text-4xl font-bold mb-6 text-[#3E2F2B]">Kesenian!</h1>
            
            <p class="text-lg text-gray-800 leading-relaxed text-justify">
                Kesenian adalah segala bentuk ekspresi jiwa manusia yang diwujudkan melalui keindahan dan kreativitas, dengan tujuan untuk dinikmati, dirasakan, dan dihargai oleh orang lain. Bentuknya sangat beragam, seperti tari, musik, teater, lukisan, sastra, dan seni rupa, yang masing-masing mencerminkan nilai, emosi, serta budaya masyarakat tempat kesenian itu tumbuh. Selain berfungsi sebagai hiburan, kesenian juga menjadi media komunikasi, pendidikan, dan pelestarian budaya yang memperkuat identitas suatu bangsa.
            </p>
        </div>


        <!-- SECTION 3: GALLERY GRID (3 KOLOM) -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-8 gap-y-12 mb-20">
            
            <a href="/galeri-detail" class="group cursor-pointer block">
                <div class="h-64 rounded-[2rem] overflow-hidden shadow-lg mb-4 border border-white/20">
                    <img src="https://i.ibb.co.com/qYSNZBLc/Rectangle-76-3.png?q=80&w=1200" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                </div>
                <h3 class="text-xl font-medium text-[#3E2F2B] pl-2">Wayang Suket Mbah Jo</h3>
            </a>

            <!-- Card 2: Keroncong (Alt) -->
            <div class="group cursor-pointer">
                <div class="h-64 rounded-[2rem] overflow-hidden shadow-lg mb-4 border border-white/20">
                    <img src="https://i.ibb.co.com/9kqtb48y/Rectangle-78.png?q=80&w=600" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                </div>
                <h3 class="text-xl font-medium text-[#3E2F2B] pl-2">Keroncong</h3>
            </div>

            <!-- Card 3: Geng-Gong (Gamelan) -->
            <div class="group cursor-pointer">
                <div class="h-64 rounded-[2rem] overflow-hidden shadow-lg mb-4 border border-white/20">
                    <img src="https://i.ibb.co.com/v6v67FTP/Rectangle-80.png?q=80&w=600" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                </div>
                <h3 class="text-xl font-medium text-[#3E2F2B] pl-2">Geng-Gong</h3>
            </div>

            <!-- Card 4: Perkusi -->
            <div class="group cursor-pointer">
                <div class="h-64 rounded-[2rem] overflow-hidden shadow-lg mb-4 border border-white/20">
                    <img src="https://i.ibb.co.com/Rp2FK8Dm/Rectangle-82.png?q=80&w=600" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                </div>
                <h3 class="text-xl font-medium text-[#3E2F2B] pl-2">Perkusi</h3>
            </div>

            <!-- Card 5: Aksara FIB (Wayang Suket Detail) -->
            <div class="group cursor-pointer">
                <div class="h-64 rounded-[2rem] overflow-hidden shadow-lg mb-4 border border-white/20">
                    <img src="https://i.ibb.co.com/xSsygGNX/Rectangle-19.png?q=80&w=600" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                </div>
                <h3 class="text-xl font-medium text-[#3E2F2B] pl-2">Aksara FIB</h3>
            </div>

            <!-- Card 6: Aksara FIB (Tarot/Kartu) -->
            <div class="group cursor-pointer">
                <div class="h-64 rounded-[2rem] overflow-hidden shadow-lg mb-4 border border-white/20">
                    <img src="https://i.ibb.co.com/1trLQLt6/Rectangle-86.png?q=80&w=600" class="w-full h-full object-cover group-hover:scale-110 transition duration-500 sepia">
                </div>
                <h3 class="text-xl font-medium text-[#3E2F2B] pl-2">Aksara FIB</h3>
            </div>

        </div>

    </div>

</x-layout>