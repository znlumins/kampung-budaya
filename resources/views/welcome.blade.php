<x-layout>
    <!-- HERO SECTION -->
    <section class="max-w-[85rem] mx-auto px-4 sm:px-6 mb-20">
        <div class="relative w-full h-[550px] md:h-[650px] rounded-[3.5rem] overflow-hidden shadow-2xl">
            <img src="https://i.ibb.co.com/RTLTrZ5k/ABY-5923-1.png" alt="Gamelan Jawa" class="w-full h-full object-cover brightness-[0.85]">
            <div id="hero-content" class="absolute inset-0 flex flex-col justify-center px-8 md:px-24 pt-10">
                <div>
                    @auth
                        <h1 class="text-white text-4xl md:text-6xl font-bold leading-tight mb-4 drop-shadow-lg">Selamat Datang Kembali, <br> {{ auth()->user()->name }}!</h1>
                    @else
                        <h1 class="text-white text-5xl md:text-7xl font-bold leading-tight mb-4 drop-shadow-lg">Welcome To <br> Kampung Budaya <br> Ketawang Gede</h1>
                    @endauth
                </div>
                <div>
                    <p class="text-white/90 text-lg md:text-2xl italic font-light max-w-2xl mb-12 leading-relaxed drop-shadow-md">Seni bukan sekadar hiburan, tapi juga wujud nyata bagaimana budaya terus hidup dan dilestarikan oleh generasi muda.</p>
                </div>
                <div>
                    <a href="#about" class="text-white flex items-center gap-2 text-lg hover:gap-4 transition-all duration-300 w-fit group">
                        <span>More about</span>
                        <ion-icon name="arrow-forward" class="text-xl"></ion-icon>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION: TENTANG (Why Us) -->
    <section id="about" class="max-w-7xl mx-auto px-6 mb-24">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
            <div id="tentang-left" class="lg:col-span-5 pt-4">
                <h2 class="text-4xl font-bold mb-8 leading-snug">Kenapa Kampung Budaya Ketawang Gede?</h2>
                <p class="text-gray-700 text-justify leading-relaxed mb-8">Kampung Budayo Ketapang Gede adalah bukti nyata bahwa sebuah kampung dapat menjadi sumber inspirasi dan pusat pembelajaran budaya yang tak lekang oleh waktu. Kami mengundang Anda untuk merasakan kedamaian, kekayaan, dan semangat pelestarian yang kami jaga erat.</p>
                <div class="flex gap-5 text-3xl">
                    <a href="https://www.instagram.com/kampungbudoyo45" target="_blank" class="hover:scale-110 transition text-pink-600"><ion-icon name="logo-instagram"></ion-icon></a>
                    <a href="https://www.tiktok.com/@kampungbudoyo" target="_blank" class="hover:scale-110 transition text-black"><ion-icon name="logo-tiktok"></ion-icon></a>
                    <a href="https://youtu.be/mQuS2OWBAFY" target="_blank" class="text-red-600 hover:scale-110 transition"><ion-icon name="logo-youtube"></ion-icon></a>
                </div>
            </div>
            <div id="tentang-right-cards" class="lg:col-span-7 space-y-5">
                <div class="bg-batik-pattern text-white p-6 rounded-[2rem] flex items-center gap-6 shadow-lg hover:translate-x-2 transition duration-300">
                    <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center shrink-0 border-2 border-kb-orange text-kb-orange"><img src="https://i.ibb.co.com/mVrgp7DM/image-59.png" class="w-full h-full object-cover transition duration-500 group-hover:scale-110"></div>
                    <div><h3 class="font-bold text-lg inline-block border-b border-white/50 pb-1 mb-1">Warisan yang Terjaga</h3><p class="text-sm text-gray-300 leading-snug">Saksikan langsung proses pelestarian seni dan kerajinan tradisional.</p></div>
                </div>
                <div class="bg-batik-pattern text-white p-6 rounded-[2rem] flex items-center gap-6 shadow-lg hover:translate-x-2 transition duration-300 lg:ml-8">
                    <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center shrink-0 border-2 border-kb-orange text-kb-orange"><img src="https://i.ibb.co.com/pBYtfv16/image-62.png" class="w-full h-full object-cover transition duration-500 group-hover:scale-110"></div>
                    <div><h3 class="font-bold text-lg inline-block border-b border-white/50 pb-1 mb-1">Harmoni Generasi</h3><p class="text-sm text-gray-300 leading-snug">Wadah bagi para sesepuh mewariskan ilmu dan nilai luhur kepada kaum muda.</p></div>
                </div>
                <div class="bg-batik-pattern text-white p-6 rounded-[2rem] flex items-center gap-6 shadow-lg hover:translate-x-2 transition duration-300">
                    <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center shrink-0 border-2 border-kb-orange text-kb-orange"><img src="https://i.ibb.co.com/9kQvytwL/image-63.png" class="w-full h-full object-cover transition duration-500 group-hover:scale-110"></div>
                    <div><h3 class="font-bold text-lg inline-block border-b border-white/50 pb-1 mb-1">Inspirasi Akademik</h3><p class="text-sm text-gray-300 leading-snug">Bagi pelajar dan mahasiswa Malang, kampung ini adalah laboratorium nyata.</p></div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION: GALERI SENI -->
    <section class="max-w-[85rem] mx-auto px-4 mb-16">
        <div class="bg-batik-pattern rounded-[3rem] p-8 md:p-12 text-white shadow-2xl overflow-hidden relative">
            <div class="flex flex-col md:flex-row justify-between items-start mb-10 relative z-10">
                <h2 class="text-3xl md:text-4xl font-bold">Seni Kampung Budoyo</h2>
                <p class="text-sm text-gray-300 max-w-md md:text-right mt-4 md:mt-0 leading-relaxed">Seni adalah aktivitas manusia yang menghasilkan karya visual, audio, atau pertunjukan dari penciptanya (seniman), yang kemudian disampaikan kepada orang lain.</p>
            </div>
            <div id="galleryContainer" class="flex gap-6 overflow-x-auto pb-6 no-scrollbar snap-x scroll-smooth">
                <div class="min-w-[280px] h-[400px] relative rounded-3xl overflow-hidden snap-start group cursor-pointer shadow-lg"><img src="https://i.ibb.co.com/ymGzcSmn/Rectangle-116.png?q=80&w=600" class="w-full h-full object-cover transition duration-500 group-hover:scale-110"><div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent"></div><div class="absolute bottom-6 left-6"><h3 class="text-2xl font-bold">Mural</h3><p class="text-xs text-gray-300">Masyarakat Kampung</p><p class="text-xs text-gray-400">Budoyo Ketawang Gede</p></div></div>
                <div class="min-w-[280px] h-[400px] relative rounded-3xl overflow-hidden snap-start group cursor-pointer shadow-lg"><img src="https://i.ibb.co.com/MwzptCK/Rectangle-121.png" class="w-full h-full object-cover transition duration-500 group-hover:scale-110"><div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent"></div><div class="absolute bottom-6 left-6"><h3 class="text-2xl font-bold">Lukisan</h3><p class="text-xs text-gray-300">Fakultas Ilmu Budaya</p><p class="text-xs text-gray-400">Universitas Brawijaya</p></div></div>
                <div class="min-w-[280px] h-[400px] relative rounded-3xl overflow-hidden snap-start group cursor-pointer shadow-lg"><img src="https://i.ibb.co.com/bjYBY8ct/Rectangle-118.png" class="w-full h-full object-cover transition duration-500 group-hover:scale-110 sepia-[.5]"><div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent"></div><div class="absolute bottom-6 left-6"><h3 class="text-2xl font-bold">Wayang Suket</h3><p class="text-xs text-gray-300">Mbah Jo</p></div></div>
                <div class="min-w-[280px] h-[400px] relative rounded-3xl overflow-hidden snap-start group cursor-pointer shadow-lg"><img src="https://i.ibb.co.com/NgPs9jVv/Rectangle-119.png" class="w-full h-full object-cover transition duration-500 group-hover:scale-110 grayscale"><div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent"></div><div class="absolute bottom-6 left-6"><h3 class="text-2xl font-bold">Keroncong</h3><p class="text-xs text-gray-300">Keroncong Nyelentang</p></div></div>
                <div class="min-w-[280px] h-[400px] relative rounded-3xl overflow-hidden snap-start group cursor-pointer shadow-lg"><img src="https://i.ibb.co.com/KxjktXmS/Rectangle-120.png" class="w-full h-full object-cover transition duration-500 group-hover:scale-110"><div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent"></div><div class="absolute bottom-6 left-6"><h3 class="text-2xl font-bold">Tarot</h3><p class="text-xs text-gray-300">Mbah Jo</p></div></div>
            </div>
            <div class="flex justify-between items-center mt-6 px-2">
                <a href="/galeri-seni">
                <button class="px-6 py-2 border border-white/40 rounded-full text-sm hover:bg-white hover:text-black transition">Lainnya</button>
                </a>
                <div class="flex gap-3">
                    <button id="prevBtn" class="w-10 h-10 flex items-center justify-center rounded-full bg-black/40 hover:bg-white hover:text-black transition cursor-pointer z-20"><ion-icon name="arrow-back"></ion-icon></button>
                    <button id="nextBtn" class="w-10 h-10 flex items-center justify-center rounded-full bg-black/40 hover:bg-white hover:text-black transition cursor-pointer z-20"><ion-icon name="arrow-forward"></ion-icon></button>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION: GAMES & ULASAN -->
    <section class="max-w-[85rem] mx-auto px-4 mb-20">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div id="games-card" class="bg-batik-pattern rounded-[2.5rem] p-10 h-72 flex flex-col justify-center relative overflow-hidden shadow-xl group">
                <div class="absolute right-0 top-0 w-64 h-64 bg-white/5 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2"></div>
                <h2 class="text-4xl font-bold text-white mb-2 relative z-10">Games</h2>
                <p class="text-gray-300 mb-8 relative z-10">Jawab Pertanyaan dengan benar!</p>
                @auth
                    <a href="{{ route('games') }}" class="bg-white text-kb-dark w-fit px-10 py-3 rounded-full font-bold shadow-lg hover:scale-105 transition duration-300 relative z-10">Mulai</a>
                @else
                    <a href="{{ route('login') }}" class="bg-white text-kb-dark w-fit px-10 py-3 rounded-full font-bold shadow-lg hover:scale-105 transition duration-300 relative z-10">Login untuk Bermain</a>
                @endauth
            </div>
            <div id="ulasan-card" class="bg-batik-pattern rounded-[2.5rem] p-10 h-72 flex flex-col justify-center relative overflow-hidden shadow-xl">
                <div class="absolute right-0 top-0 w-64 h-64 bg-white/5 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2"></div>
                <h2 class="text-4xl font-bold text-white mb-2 relative z-10">Ulasan</h2>
                <p class="text-gray-300 mb-8 relative z-10">Tuangkan Saran Dan kritikan!</p>
                <div class="flex gap-4 relative z-10">
                    @auth
                        <a href="{{ route('ulasan.create') }}" class="bg-white text-kb-dark px-10 py-3 rounded-full font-bold shadow-lg hover:scale-105 transition duration-300">Tambah</a>
                        <a href="{{ route('ulasan.index') }}" class="bg-white text-kb-dark px-10 py-3 rounded-full font-bold shadow-lg hover:scale-105 transition duration-300">Lihat</a>
                    @else
                        <a href="{{ route('login') }}" class="bg-white text-kb-dark px-10 py-3 rounded-full font-bold shadow-lg hover:scale-105 transition duration-300">Login untuk Beri Ulasan</a>
                    @endauth
                </div>
            </div>
        </div>
    </section>

    <!-- SKRIP UNTUK GALERI -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const container = document.getElementById('galleryContainer');
            const prevBtn = document.getElementById('prevBtn');
            const nextBtn = document.getElementById('nextBtn');
            const scrollAmount = 320; 

            if (container && prevBtn && nextBtn) {
                nextBtn.addEventListener('click', () => {
                    container.scrollBy({ left: scrollAmount, behavior: 'smooth' });
                });
                prevBtn.addEventListener('click', () => {
                    container.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
                });
            }
        });
    </script>

    <!-- MEMUAT SKRIP ANIMASI KHUSUS UNTUK HALAMAN INI -->
    @push('scripts')
        @vite('resources/js/welcomeAnimations.jsx')
    @endpush
</x-layout>