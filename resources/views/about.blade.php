<x-layout>

    <!-- Container Utama -->
    <div class="max-w-[85rem] mx-auto px-6 py-8">

        <!-- SECTION 1: HERO IMAGE BESAR -->
        <div class="relative w-full h-[400px] md:h-[550px] rounded-[3rem] overflow-hidden shadow-2xl mb-16 group">
            
            <!-- Gambar Mural (Ganti src dengan gambar aslimu nanti) -->
            <img src="https://i.ibb.co.com/hRWQnxcD/Rectangle-24.png" 
                 alt="Mural Kampung Budoyo" 
                 class="w-full h-full object-cover brightness-90 group-hover:scale-105 transition duration-700">

            <!-- Tombol Back (Pojok Kiri Atas) -->
            <a href="/" class="absolute top-8 left-8 w-12 h-12 bg-black/40 hover:bg-black/70 text-white rounded-full flex items-center justify-center backdrop-blur-sm transition-all duration-300">
                <ion-icon name="arrow-back" class="text-2xl"></ion-icon>
            </a>
            
            <!-- Overlay Text (Opsional, jika gambar kosong) -->
            <div class="absolute bottom-0 left-0 w-full h-1/2 bg-gradient-to-t from-black/60 to-transparent"></div>
        </div>


        <!-- SECTION 2: GALERI OVAL (5 ITEM) -->
        <!-- Grid: 2 kolom di HP, 5 kolom di Laptop -->
        <div class="grid grid-cols-2 md:grid-cols-5 gap-4 md:gap-8 mb-16">
            
            <!-- Item 1: Wayang/Craft -->
            <div class="aspect-[9/14] rounded-full overflow-hidden shadow-xl border-4 border-white hover:-translate-y-2 transition duration-300">
                <img src="https://i.ibb.co.com/pvHRLMXT/Rectangle-19.png" class="w-full h-full object-cover">
            </div>

            <!-- Item 2: Lukisan -->
            <div class="aspect-[9/14] rounded-full overflow-hidden shadow-xl border-4 border-white hover:-translate-y-2 transition duration-300 delay-100">
                <img src="https://i.ibb.co.com/4RLcxNxf/Rectangle-74.png" class="w-full h-full object-cover">
            </div>

            <!-- Item 3: Diskusi/Komunitas -->
            <div class="aspect-[9/14] rounded-full overflow-hidden shadow-xl border-4 border-white hover:-translate-y-2 transition duration-300 delay-200">
                <img src="https://i.ibb.co.com/RTWWgtxw/Rectangle-75.png" class="w-full h-full object-cover">
            </div>

            <!-- Item 4: Gamelan/Musik -->
            <div class="aspect-[9/14] rounded-full overflow-hidden shadow-xl border-4 border-white hover:-translate-y-2 transition duration-300 delay-300">
                <img src="https://i.ibb.co.com/vCyDzS7w/Rectangle-76.png" class="w-full h-full object-cover">
            </div>

            <!-- Item 5: Event -->
            <div class="aspect-[9/14] rounded-full overflow-hidden shadow-xl border-4 border-white hover:-translate-y-2 transition duration-300 delay-400">
                <img src="https://i.ibb.co.com/zhptBhpT/Rectangle-77.png" class="w-full h-full object-cover">
            </div>

        </div>


        <!-- SECTION 3: TEXT CONTENT -->
        <div class="max-w-6xl mx-auto space-y-8 text-lg text-gray-800 leading-relaxed font-light">
            
            <p class="text-justify">
                <span class="font-semibold text-[#3E2F2B]">Kampung Budoyo</span> adalah kawasan yang berfungsi sebagai pusat pelestarian dan pengenalan budaya lokal suatu daerah. Di tempat ini, pengunjung dapat menyaksikan berbagai kegiatan tradisional seperti pertunjukan seni, pembuatan kerajinan tangan, upacara adat, serta menikmati kuliner khas daerah. Selain menjadi destinasi wisata, Kampung Budoyo juga berperan penting dalam menjaga warisan leluhur agar tetap hidup di tengah perkembangan zaman dan menjadi sarana edukasi bagi masyarakat untuk mengenal serta mencintai budaya bangsa.
            </p>

            <p class="text-justify">
                Ketua Kampung Budoyo saat ini adalah <span class="font-semibold text-[#3E2F2B]">Bapak Daffa Ahmad Al Attas</span>, seorang tokoh yang memiliki kepedulian besar terhadap pelestarian seni tradisional dan budaya tradisional. Beliau sudah lama aktif dalam berbagai kegiatan masyarakat yang berfokus pada pengembangan potensi budaya lokal, seperti pertunjukan kesenian, pelatihan seniman muda, hingga pengenalan kuliner tradisional khas kampung.
            </p>

            <p class="text-justify">
                Di bawah kepemimpinan beliau, Kampung Budoyo terus berinovasi tanpa meninggalkan nilai-nilai tradisi. Beliau percaya bahwa budaya tidak boleh berhenti di masa lalu, tetapi harus terus tumbuh, beradaptasi, dan hidup berdampingan dengan perkembangan zaman. Harapannya, generasi muda dapat ikut terlibat dan merasa bangga menjadi bagian dari pelestarian budaya Indonesia melalui wadah ini.
            </p>

        </div>

    </div>

</x-layout>