<x-layout>

    <!-- Container Utama -->
    <div class="max-w-[85rem] mx-auto px-6 py-10">

        <!-- SECTION 1: HERO IMAGE -->
        <div class="relative w-full h-[400px] md:h-[500px] rounded-[3rem] overflow-hidden shadow-2xl mb-16 group">
            
            <!-- Gambar Jajan Pasar -->
            <img src="https://images.unsplash.com/photo-1604503708816-f3310037f407?q=80&w=1200" 
                 alt="Aneka Jajan Pasar Tradisional" 
                 class="w-full h-full object-cover group-hover:scale-105 transition duration-700">

            <!-- Tombol Back (Pojok Kiri Atas) -->
            <a href="/" class="absolute top-8 left-8 w-12 h-12 bg-black/40 hover:bg-black/70 text-white rounded-full flex items-center justify-center backdrop-blur-sm transition-all duration-300 z-10">
                <ion-icon name="arrow-back" class="text-2xl"></ion-icon>
            </a>
            
            <!-- Overlay tipis -->
            <div class="absolute inset-0 bg-black/10"></div>
        </div>


        <!-- SECTION 2: INTRO & FEATURES -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 mb-16 items-center">
            
            <!-- Kiri: Penjelasan Teks -->
            <div class="lg:col-span-7">
                <h1 class="text-3xl md:text-4xl font-bold text-[#3E2F2B] mb-6">
                    Apa Itu Makanan Tradisional?
                </h1>
                <p class="text-gray-800 text-lg leading-relaxed text-justify">
                    Kuliner tradisional adalah makanan dan minuman khas yang berasal dari suatu daerah atau budaya tertentu, yang telah diwariskan secara turun-temurun dan menjadi bagian dari identitas masyarakatnya. Biasanya, kuliner tradisional memiliki ciri khas tersendiri, baik dari segi rasa, bahan, cara pengolahan, maupun penyajiannya. Ciri khas ini dipengaruhi oleh lingkungan alam, adat istiadat, dan kebiasaan masyarakat setempat.
                </p>
            </div>

            <!-- Kanan: 4 Badge Fitur -->
            <div class="lg:col-span-5 grid grid-cols-2 gap-4">
                
                <!-- Badge 1 -->
                <div class="bg-[#463C38] text-white rounded-full p-2 pr-6 flex items-center gap-3 shadow-lg hover:-translate-y-1 transition">
                    <div class="w-12 h-12 bg-[#F5E6CA] rounded-full flex items-center justify-center shrink-0 border-2 border-[#A85D36]">
                        <ion-icon name="leaf" class="text-2xl text-[#463C38]"></ion-icon>
                    </div>
                    <span class="font-medium text-sm">Bahan Lokal</span>
                </div>

                <!-- Badge 2 -->
                <div class="bg-[#463C38] text-white rounded-full p-2 pr-6 flex items-center gap-3 shadow-lg hover:-translate-y-1 transition">
                    <div class="w-12 h-12 bg-[#F5E6CA] rounded-full flex items-center justify-center shrink-0 border-2 border-[#A85D36]">
                        <ion-icon name="ribbon" class="text-2xl text-[#463C38]"></ion-icon>
                    </div>
                    <span class="font-medium text-sm">Nilai Budaya</span>
                </div>

                <!-- Badge 3 -->
                <div class="bg-[#463C38] text-white rounded-full p-2 pr-6 flex items-center gap-3 shadow-lg hover:-translate-y-1 transition">
                    <div class="w-12 h-12 bg-[#F5E6CA] rounded-full flex items-center justify-center shrink-0 border-2 border-[#A85D36]">
                        <ion-icon name="book" class="text-2xl text-[#463C38]"></ion-icon>
                    </div>
                    <span class="font-medium text-sm">Resep Turun</span>
                </div>

                <!-- Badge 4 -->
                <div class="bg-[#463C38] text-white rounded-full p-2 pr-6 flex items-center gap-3 shadow-lg hover:-translate-y-1 transition">
                    <div class="w-12 h-12 bg-[#F5E6CA] rounded-full flex items-center justify-center shrink-0 border-2 border-[#A85D36]">
                        <ion-icon name="map" class="text-2xl text-[#463C38]"></ion-icon>
                    </div>
                    <span class="font-medium text-sm">Khas Daerah</span>
                </div>

            </div>
        </div>


        <!-- SECTION 3: FOOD CARDS GRID (2 Kolom) -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">

            <!-- Card 1: Nagasari -->
            <div class="bg-[#463C38] text-white rounded-[2.5rem] p-6 flex flex-col sm:flex-row gap-6 items-center shadow-xl hover:shadow-2xl transition duration-300">
                <div class="w-full sm:w-48 h-48 shrink-0 rounded-3xl overflow-hidden border border-white/20">
                    <img src="https://images.unsplash.com/photo-1628108480391-727932d0c242?q=80&w=400" class="w-full h-full object-cover">
                </div>
                <div>
                    <h3 class="text-2xl font-bold border-b border-white/50 inline-block mb-3 pb-1">Nagasari</h3>
                    <p class="text-sm text-gray-200 leading-relaxed text-justify">
                        Nagasari adalah kue basah yang terbuat dari tepung beras, santan, dan gula, yang dibungkus dengan daun pisang dan di dalamnya diberi potongan pisang.
                    </p>
                </div>
            </div>

            <!-- Card 2: Lupis -->
            <div class="bg-[#463C38] text-white rounded-[2.5rem] p-6 flex flex-col sm:flex-row gap-6 items-center shadow-xl hover:shadow-2xl transition duration-300">
                <div class="w-full sm:w-48 h-48 shrink-0 rounded-3xl overflow-hidden border border-white/20">
                    <img src="https://images.unsplash.com/photo-1598561705663-875c742c3858?q=80&w=400" class="w-full h-full object-cover">
                </div>
                <div>
                    <h3 class="text-2xl font-bold border-b border-white/50 inline-block mb-3 pb-1">Lupis</h3>
                    <p class="text-sm text-gray-200 leading-relaxed text-justify">
                        Lupis adalah kue tradisional dari beras ketan yang dimasak segitiga atau bulat, disiram saus gula merah kental dan parutan kelapa.
                    </p>
                </div>
            </div>

            <!-- Card 3: Klepon -->
            <div class="bg-[#463C38] text-white rounded-[2.5rem] p-6 flex flex-col sm:flex-row gap-6 items-center shadow-xl hover:shadow-2xl transition duration-300">
                <div class="w-full sm:w-48 h-48 shrink-0 rounded-3xl overflow-hidden border border-white/20">
                    <img src="https://images.unsplash.com/photo-1626081577783-c5b1b4432135?q=80&w=400" class="w-full h-full object-cover">
                </div>
                <div>
                    <h3 class="text-2xl font-bold border-b border-white/50 inline-block mb-3 pb-1">Klepon</h3>
                    <p class="text-sm text-gray-200 leading-relaxed text-justify">
                        Klepon adalah jajanan pasar berbentuk bulat hijau, berisi gula merah cair, dan ditaburi parutan kelapa. Sensasi "meletup" di mulut saat dimakan.
                    </p>
                </div>
            </div>

            <!-- Card 4: Getuk -->
            <div class="bg-[#463C38] text-white rounded-[2.5rem] p-6 flex flex-col sm:flex-row gap-6 items-center shadow-xl hover:shadow-2xl transition duration-300">
                <div class="w-full sm:w-48 h-48 shrink-0 rounded-3xl overflow-hidden border border-white/20">
                    <img src="https://images.unsplash.com/photo-1616428782977-965a39626300?q=80&w=400" class="w-full h-full object-cover">
                </div>
                <div>
                    <h3 class="text-2xl font-bold border-b border-white/50 inline-block mb-3 pb-1">Getuk</h3>
                    <p class="text-sm text-gray-200 leading-relaxed text-justify">
                        Getuk adalah makanan ringan dari singkong yang dikukus, dihaluskan dengan gula, lalu dicetak dan disajikan dengan parutan kelapa.
                    </p>
                </div>
            </div>

            <!-- Card 5: Dadar Gulung -->
            <div class="bg-[#463C38] text-white rounded-[2.5rem] p-6 flex flex-col sm:flex-row gap-6 items-center shadow-xl hover:shadow-2xl transition duration-300">
                <div class="w-full sm:w-48 h-48 shrink-0 rounded-3xl overflow-hidden border border-white/20">
                    <img src="https://images.unsplash.com/photo-1617431525624-912b7a974b7c?q=80&w=400" class="w-full h-full object-cover">
                </div>
                <div>
                    <h3 class="text-2xl font-bold border-b border-white/50 inline-block mb-3 pb-1">Dadar Gulung</h3>
                    <p class="text-sm text-gray-200 leading-relaxed text-justify">
                        Dadar gulung hijau beraroma pandan yang diisi dengan parutan kelapa yang dimasak dengan gula merah (unti). Manis dan legit.
                    </p>
                </div>
            </div>

            <!-- Card 6: Serabi -->
            <div class="bg-[#463C38] text-white rounded-[2.5rem] p-6 flex flex-col sm:flex-row gap-6 items-center shadow-xl hover:shadow-2xl transition duration-300">
                <div class="w-full sm:w-48 h-48 shrink-0 rounded-3xl overflow-hidden border border-white/20">
                    <img src="https://images.unsplash.com/photo-1601620986641-5a4135e5898d?q=80&w=400" class="w-full h-full object-cover">
                </div>
                <div>
                    <h3 class="text-2xl font-bold border-b border-white/50 inline-block mb-3 pb-1">Serabi</h3>
                    <p class="text-sm text-gray-200 leading-relaxed text-justify">
                        Kue mirip panekuk dari tepung beras dan santan. Dimasak di atas cetakan tanah liat, disajikan dengan kuah kinca (gula merah & santan).
                    </p>
                </div>
            </div>

            <!-- Card 7: Onde-Onde -->
            <div class="bg-[#463C38] text-white rounded-[2.5rem] p-6 flex flex-col sm:flex-row gap-6 items-center shadow-xl hover:shadow-2xl transition duration-300">
                <div class="w-full sm:w-48 h-48 shrink-0 rounded-3xl overflow-hidden border border-white/20">
                    <img src="https://images.unsplash.com/photo-1596450535300-8809088654c6?q=80&w=400" class="w-full h-full object-cover">
                </div>
                <div>
                    <h3 class="text-2xl font-bold border-b border-white/50 inline-block mb-3 pb-1">Onde-Onde</h3>
                    <p class="text-sm text-gray-200 leading-relaxed text-justify">
                        Kue berbentuk bola kecil bertabur wijen, berisi adonan kacang hijau manis. Bagian luar renyah, bagian dalam lembut.
                    </p>
                </div>
            </div>

            <!-- Card 8: Ongol-Ongol -->
            <div class="bg-[#463C38] text-white rounded-[2.5rem] p-6 flex flex-col sm:flex-row gap-6 items-center shadow-xl hover:shadow-2xl transition duration-300">
                <div class="w-full sm:w-48 h-48 shrink-0 rounded-3xl overflow-hidden border border-white/20">
                    <img src="https://images.unsplash.com/photo-1628108480391-727932d0c242?q=80&w=400" class="w-full h-full object-cover grayscale-[0.2]">
                </div>
                <div>
                    <h3 class="text-2xl font-bold border-b border-white/50 inline-block mb-3 pb-1">Ongol-Ongol</h3>
                    <p class="text-sm text-gray-200 leading-relaxed text-justify">
                        Jajanan dari tepung sagu/hunkwe yang kenyal dan manis, disajikan dengan taburan kelapa parut. Teksturnya sangat lembut.
                    </p>
                </div>
            </div>

        </div>

    </div>

</x-layout>