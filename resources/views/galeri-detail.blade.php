<x-layout>

    <!-- Container Utama -->
    <div class="max-w-[85rem] mx-auto px-6 py-10 md:py-14">

        <!-- HEADER: Tombol Back & Judul -->
        <div class="flex items-center gap-6 mb-10">
            <!-- Tombol Back -->
            <a href="/pentas-seni" class="w-12 h-12 flex items-center justify-center bg-[#4A403A] text-white rounded-full hover:bg-black transition duration-300 shadow-lg">
                <ion-icon name="arrow-back" class="text-2xl"></ion-icon>
            </a>
            
            <!-- Judul -->
            <h1 class="text-3xl md:text-4xl font-bold text-[#3E2F2B] border-b-4 border-[#3E2F2B] pb-1 inline-block">
                Tertarik Dengan Ini?
            </h1>
        </div>


        <!-- CONTENT GRID: Kiri Teks, Kanan Gambar -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">

            <!-- BAGIAN KIRI: TEKS DESKRIPSI -->
            <div class="lg:col-span-7 text-lg text-gray-800 leading-relaxed text-justify space-y-6 font-light">
                <p>
                    Wayang suket adalah salah satu bentuk wayang tradisional Indonesia yang terbuat dari rumput kering (suket dalam bahasa Jawa berarti rumput). Wayang ini merupakan bentuk sederhana dari wayang kulit, tetapi memiliki makna budaya dan nilai seni yang sangat tinggi. Wayang suket biasanya dibuat oleh masyarakat pedesaan Jawa, terutama untuk hiburan anak-anak atau pertunjukan kecil yang tidak memerlukan peralatan lengkap seperti gamelan atau layar.
                </p>
                <p>
                    Maka dari itu, Kampung Budoyo menawarkan pertunjukan Wayang Suket bersama Mbah Jo sebagai upaya pelestarian budaya tradisional Indonesia. Melalui kreativitas dan nilai-nilai luhur yang terkandung di dalamnya, pertunjukan ini tidak hanya menjadi hiburan semata, tetapi juga sarana edukasi dan refleksi bagi generasi muda untuk mengenal, memahami, serta mencintai budaya bangsa. Kegiatan ini dapat diselenggarakan dalam berbagai acara, baik di lingkungan kampus maupun di luar, sebagai wujud nyata dukungan terhadap keberlanjutan seni dan kearifan lokal.
                </p>
            </div>


            <!-- BAGIAN KANAN: GAMBAR & TOMBOL -->
            <div class="lg:col-span-5 flex flex-col items-center lg:items-end">
                
                <!-- Wrapper Gambar (2 Gambar Berjejer) -->
                <div class="flex gap-4 mb-6 w-full justify-center lg:justify-end">
                    <!-- Gambar 1 -->
                    <div class="w-1/2 aspect-[3/4] rounded-[2rem] overflow-hidden shadow-xl border border-white/50">
                        <img src="https://images.unsplash.com/photo-1628062148006-0370f614072f?q=80&w=600" 
                             class="w-full h-full object-cover hover:scale-110 transition duration-500">
                    </div>
                    <!-- Gambar 2 -->
                    <div class="w-1/2 aspect-[3/4] rounded-[2rem] overflow-hidden shadow-xl border border-white/50">
                        <img src="https://images.unsplash.com/photo-1628108480391-727932d0c242?q=80&w=600" 
                             class="w-full h-full object-cover hover:scale-110 transition duration-500 sepia-[.3]">
                    </div>
                </div>

                <!-- Judul Kanan -->
                <h2 class="text-3xl font-bold text-[#3E2F2B] mb-10 text-center lg:text-right w-full">
                    Wayang Suket Mbah Jo
                </h2>

                <!-- Tombol Action -->
                <div class="flex gap-4">
                    <!-- Tombol Batal -->
                    <a href="/pentas-seni" class="px-8 py-3 bg-[#463C38] text-white rounded-full font-semibold hover:bg-[#2d2624] transition duration-300 shadow-md">
                        Batal
                    </a>
                    
                    <!-- Tombol Lanjut WA -->
                    <a href="https://wa.me/6285727112139?text=Halo%20Admin,%20saya%20tertarik%20dengan%20pertunjukan%20Wayang%20Suket%20Mbah%20Jo" 
                       target="_blank"
                       class="px-8 py-3 bg-[#463C38] text-white rounded-full font-semibold hover:bg-[#2d2624] transition duration-300 shadow-md">
                        Lanjut Whatsapp
                    </a>
                </div>

            </div>

        </div>

    </div>

</x-layout>