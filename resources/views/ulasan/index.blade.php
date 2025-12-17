<x-layout>
    <div class="max-w-[90rem] mx-auto px-6 py-10">
        <div class="flex flex-col lg:flex-row gap-8 items-start">
            
            <!-- BAGIAN KIRI: SIDEBAR INFO -->
            <div class="w-full lg:w-1/3 bg-[#756A60] rounded-[2.5rem] p-10 text-white shadow-2xl sticky top-24">
                <h1 class="text-4xl md:text-5xl font-bold leading-tight mb-6">Ulasan <br> Kampung Budaya <br> Ketawang Gede</h1>
                <p class="text-white/90 text-lg font-light mb-12">Tuangkan Saran Dan kritikan!</p>
                <div class="flex gap-4">
                    <a href="{{ route('ulasan.create') }}" class="px-8 py-3 bg-[#F5E6CA] text-[#3E2F2B] rounded-full font-bold hover:bg-white transition duration-300 shadow-lg">Tambah</a>
                    <a href="{{ route('home') }}" class="px-8 py-3 bg-[#F5E6CA] text-[#3E2F2B] rounded-full font-bold hover:bg-white transition duration-300 shadow-lg">Kembali</a>
                </div>
            </div>

            <!-- BAGIAN KANAN: GRID ULASAN -->
            <div class="w-full lg:w-2/3">
                @if (session('success'))
                    <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6 rounded-md" role="alert">
                        <p class="font-bold">Berhasil!</p>
                        <p>{{ session('success') }}</p>
                    </div>
                @endif
                
                {{-- PERBAIKAN 1: Jadikan ini "wadah" kosong tanpa data atribut --}}
                <div id="react-ulasan-app"></div>

            </div>
        </div>
    </div>

    {{-- 
      ========================================================================
      ==== PERBAIKAN 2: Kirim data melalui tag <script> di bawah sini ====
      ========================================================================
    --}}
    <script>
        // Membuat variabel global 'ulasansData' yang bisa diakses oleh app.jsx
        window.ulasansData = @json($ulasans->map(function($ulasan) {
            $ulasan->created_at_human = $ulasan->created_at->diffForHumans();
            return $ulasan;
        }));
    </script>
</x-layout>