<x-layout>

    <!-- HERO SECTION -->
    <section class="max-w-[85rem] mx-auto px-4 sm:px-6 mb-20">
        <div class="relative w-full h-[550px] md:h-[650px] rounded-[3.5rem] overflow-hidden shadow-2xl">
            <!-- Image Background -->
            <img src="https://i.ibb.co.com/RTLTrZ5k/ABY-5923-1.png" 
                 alt="Gamelan Jawa" 
                 class="w-full h-full object-cover brightness-[0.85]">
            
            <!-- Content Overlay -->
            <div class="absolute inset-0 flex flex-col justify-center px-8 md:px-24 pt-10">
                <h1 class="text-white text-5xl md:text-7xl font-bold leading-tight mb-4 drop-shadow-lg">
                    Welcome To <br>
                    Kampung Budaya <br>
                    Ketawang Gede
                </h1>
                <p class="text-white/90 text-lg md:text-2xl italic font-light max-w-2xl mb-12 leading-relaxed drop-shadow-md">
                    Seni bukan sekadar hiburan, tapi juga wujud nyata bagaimana 
                    budaya terus hidup dan dilestarikan oleh generasi muda.
                </p>
                
                <a href="#about" class="text-white flex items-center gap-2 text-lg hover:gap-4 transition-all duration-300 w-fit group">
                    <span>More about</span>
                    <ion-icon name="arrow-forward" class="text-xl"></ion-icon>
                </a>
            </div>
            
        </div>
    </section>

    <!-- SECTION: TENTANG (Why Us) -->
    <section id="about" class="max-w-7xl mx-auto px-6 mb-24">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
            
            <!-- Left Content (Text) -->
            <div class="lg:col-span-5 pt-4">
                <h2 class="text-4xl font-bold mb-8 leading-snug">
                    Kenapa Kampung Budaya Ketawang Gede?
                </h2>
                <p class="text-gray-700 text-justify leading-relaxed mb-8">
                    Kampung Budayo Ketapang Gede adalah bukti nyata bahwa sebuah kampung dapat menjadi sumber inspirasi 
                    dan pusat pembelajaran budaya yang tak lekang oleh waktu. Kami mengundang Anda untuk merasakan 
                    kedamaian, kekayaan, dan semangat pelestarian yang kami jaga erat.
                </p>
                <!-- Social Media -->
                <div class="flex gap-5 text-3xl">
                    <a href="#" class="hover:scale-110 transition"><ion-icon name="logo-instagram"></ion-icon></a>
                    <a href="#" class="hover:scale-110 transition"><ion-icon name="logo-tiktok"></ion-icon></a>
                    <a href="#" class="text-red-600 hover:scale-110 transition"><ion-icon name="logo-youtube"></ion-icon></a>
                </div>
            </div>

            <!-- Right Content (Cards) -->
            <div class="lg:col-span-7 space-y-5">
                <!-- Item 1 -->
                <div class="bg-batik-pattern text-white p-6 rounded-[2rem] flex items-center gap-6 shadow-lg hover:translate-x-2 transition duration-300">
                    <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center shrink-0 border-2 border-kb-orange text-kb-orange">
                        <img src="https://i.ibb.co.com/mVrgp7DM/image-59.png" class="w-full h-full object-cover transition duration-500 group-hover:scale-110">
                    </div>
                    <div>
                        <h3 class="font-bold text-lg inline-block border-b border-white/50 pb-1 mb-1">Warisan yang Terjaga</h3>
                        <p class="text-sm text-gray-300 leading-snug">Saksikan langsung proses pelestarian seni dan kerajinan tradisional.</p>
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="bg-batik-pattern text-white p-6 rounded-[2rem] flex items-center gap-6 shadow-lg hover:translate-x-2 transition duration-300 lg:ml-8">
                    <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center shrink-0 border-2 border-kb-orange text-kb-orange">
                        <img src="https://i.ibb.co.com/pBYtfv16/image-62.png" class="w-full h-full object-cover transition duration-500 group-hover:scale-110">
                    </div>
                    <div>
                        <h3 class="font-bold text-lg inline-block border-b border-white/50 pb-1 mb-1">Harmoni Generasi</h3>
                        <p class="text-sm text-gray-300 leading-snug">Wadah bagi para sesepuh mewariskan ilmu dan nilai luhur kepada kaum muda.</p>
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="bg-batik-pattern text-white p-6 rounded-[2rem] flex items-center gap-6 shadow-lg hover:translate-x-2 transition duration-300">
                    <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center shrink-0 border-2 border-kb-orange text-kb-orange">
                        <img src="https://i.ibb.co.com/9kQvytwL/image-63.png" class="w-full h-full object-cover transition duration-500 group-hover:scale-110">
                    </div>
                    <div>
                        <h3 class="font-bold text-lg inline-block border-b border-white/50 pb-1 mb-1">Inspirasi Akademik</h3>
                        <p class="text-sm text-gray-300 leading-snug">Bagi pelajar dan mahasiswa Malang, kampung ini adalah laboratorium nyata.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION: GALERI SENI -->
    <section class="max-w-[85rem] mx-auto px-4 mb-16">
        <div class="bg-batik-pattern rounded-[3rem] p-8 md:p-12 text-white shadow-2xl overflow-hidden relative">
            
            <!-- Header Galeri -->
            <div class="flex flex-col md:flex-row justify-between items-start mb-10 relative z-10">
                <h2 class="text-3xl md:text-4xl font-bold">Seni Kampung Budoyo</h2>
                <p class="text-sm text-gray-300 max-w-md md:text-right mt-4 md:mt-0 leading-relaxed">
                    Seni adalah aktivitas manusia yang menghasilkan karya visual, audio, atau pertunjukan dari penciptanya (seniman), yang kemudian disampaikan kepada orang lain.
                </p>
            </div>

            <!-- Scrolling Cards (ADDED: id="galleryContainer" & scroll-smooth) -->
            <div id="galleryContainer" class="flex gap-6 overflow-x-auto pb-6 no-scrollbar snap-x scroll-smooth">
                
                <!-- Card 1: Mural -->
                <div class="min-w-[280px] h-[400px] relative rounded-3xl overflow-hidden snap-start group cursor-pointer shadow-lg">
                    <img src="https://i.ibb.co.com/ymGzcSmn/Rectangle-116.png?q=80&w=600" class="w-full h-full object-cover transition duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent"></div>
                    <div class="absolute bottom-6 left-6">
                        <h3 class="text-2xl font-bold">Mural</h3>
                        <p class="text-xs text-gray-300">Masyarakat Kampung</p>
                        <p class="text-xs text-gray-400">Budoyo Ketawang Gede</p>
                    </div>
                </div>

                <!-- Card 2: Lukisan -->
                <div class="min-w-[280px] h-[400px] relative rounded-3xl overflow-hidden snap-start group cursor-pointer shadow-lg">
                    <img src="https://i.ibb.co.com/MwzptCK/Rectangle-121.png" class="w-full h-full object-cover transition duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent"></div>
                    <div class="absolute bottom-6 left-6">
                        <h3 class="text-2xl font-bold">Lukisan</h3>
                        <p class="text-xs text-gray-300">Fakultas Ilmu Budaya</p>
                        <p class="text-xs text-gray-400">Universitas Brawijaya</p>
                    </div>
                </div>

                <!-- Card 3: Wayang -->
                <div class="min-w-[280px] h-[400px] relative rounded-3xl overflow-hidden snap-start group cursor-pointer shadow-lg">
                    <img src="https://i.ibb.co.com/bjYBY8ct/Rectangle-118.png" class="w-full h-full object-cover transition duration-500 group-hover:scale-110 sepia-[.5]">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent"></div>
                    <div class="absolute bottom-6 left-6">
                        <h3 class="text-2xl font-bold">Wayang Suket</h3>
                        <p class="text-xs text-gray-300">Mbah Jo</p>
                    </div>
                </div>

                 <!-- Card 4: Keroncong -->
                 <div class="min-w-[280px] h-[400px] relative rounded-3xl overflow-hidden snap-start group cursor-pointer shadow-lg">
                    <img src="https://i.ibb.co.com/NgPs9jVv/Rectangle-119.png" class="w-full h-full object-cover transition duration-500 group-hover:scale-110 grayscale">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent"></div>
                    <div class="absolute bottom-6 left-6">
                        <h3 class="text-2xl font-bold">Keroncong</h3>
                        <p class="text-xs text-gray-300">Keroncong Nyelentang</p>
                    </div>
                </div>

                 <!-- Card 5: Tarot -->
                 <div class="min-w-[280px] h-[400px] relative rounded-3xl overflow-hidden snap-start group cursor-pointer shadow-lg">
                    <img src="https://i.ibb.co.com/KxjktXmS/Rectangle-120.png" class="w-full h-full object-cover transition duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent"></div>
                    <div class="absolute bottom-6 left-6">
                        <h3 class="text-2xl font-bold">Tarot</h3>
                        <p class="text-xs text-gray-300">Mbah Jo</p>
                    </div>
                </div>
            </div>

            <!-- Footer Galeri (Tombol Lainnya & Navigasi) -->
            <div class="flex justify-between items-center mt-6 px-2">
                <button class="px-6 py-2 border border-white/40 rounded-full text-sm hover:bg-white hover:text-black transition">Lainnya</button>
                <div class="flex gap-3">
                    <!-- ADDED: id="prevBtn" -->
                    <button id="prevBtn" class="w-10 h-10 flex items-center justify-center rounded-full bg-black/40 hover:bg-white hover:text-black transition cursor-pointer z-20">
                        <ion-icon name="arrow-back"></ion-icon>
                    </button>
                    <!-- ADDED: id="nextBtn" -->
                    <button id="nextBtn" class="w-10 h-10 flex items-center justify-center rounded-full bg-black/40 hover:bg-white hover:text-black transition cursor-pointer z-20">
                        <ion-icon name="arrow-forward"></ion-icon>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION: GAMES & ULASAN -->
    <section class="max-w-[85rem] mx-auto px-4 mb-20">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            
            <!-- Games Card -->
            <div class="bg-batik-pattern rounded-[2.5rem] p-10 h-72 flex flex-col justify-center relative overflow-hidden shadow-xl group">
                <div class="absolute right-0 top-0 w-64 h-64 bg-white/5 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2"></div>
                
                <h2 class="text-4xl font-bold text-white mb-2 relative z-10">Games</h2>
                <p class="text-gray-300 mb-8 relative z-10">Jawab Pertanyaan dengan benar!</p>
                
                <a href="/games" class="hover:text-[#A85D36]">
                <button class="bg-white text-kb-dark w-fit px-10 py-3 rounded-full font-bold shadow-lg hover:scale-105 transition duration-300 relative z-10">
                    Mulai
                </button>
                </a>
            </div>

            <!-- Ulasan Card -->
            <div class="bg-batik-pattern rounded-[2.5rem] p-10 h-72 flex flex-col justify-center relative overflow-hidden shadow-xl">
                <div class="absolute right-0 top-0 w-64 h-64 bg-white/5 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2"></div>

                <h2 class="text-4xl font-bold text-white mb-2 relative z-10">Ulasan</h2>
                <p class="text-gray-300 mb-8 relative z-10">Tuangkan Saran Dan kritikan!</p>
                
                <div class="flex gap-4 relative z-10">
                    <button class="bg-white text-kb-dark px-10 py-3 rounded-full font-bold shadow-lg hover:scale-105 transition duration-300">
                        Tambah
                    </button>
                    <button class="bg-white text-kb-dark px-10 py-3 rounded-full font-bold shadow-lg hover:scale-105 transition duration-300">
                        Lihat
                    </button>
                </div>
            </div>
        </div>
    </section>



    <!-- SCRIPT FUNCTIONALITY (NEW) -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const container = document.getElementById('galleryContainer');
            const prevBtn = document.getElementById('prevBtn');
            const nextBtn = document.getElementById('nextBtn');

            // Jarak scroll: Lebar Kartu (280px) + Gap (24px) = 304px. Dibulatkan 320px agar aman.
            const scrollAmount = 320; 

            if (container && prevBtn && nextBtn) {
                nextBtn.addEventListener('click', () => {
                    container.scrollBy({
                        left: scrollAmount,
                        behavior: 'smooth'
                    });
                });

                prevBtn.addEventListener('click', () => {
                    container.scrollBy({
                        left: -scrollAmount,
                        behavior: 'smooth'
                    });
                });
            }
        });
    </script>

</x-layout>