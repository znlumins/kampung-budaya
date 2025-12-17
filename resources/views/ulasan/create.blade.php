<x-layout>
    <div class="min-h-[80vh] flex items-center justify-center px-4 py-12 bg-[#faf9f6]">
        
        <div class="w-full max-w-2xl bg-white rounded-[2.5rem] shadow-2xl overflow-hidden flex flex-col md:flex-row">
            
            <!-- Sisi Kiri (Dekorasi) -->
            <div class="w-full md:w-1/3 bg-[#3E2F2B] p-8 flex flex-col justify-center items-center text-center text-white relative overflow-hidden">
                <div class="absolute top-0 left-0 w-full h-full opacity-10 bg-[url('https://www.transparenttextures.com/patterns/batik.png')]"></div>
                <ion-icon name="chatbox-ellipses" class="text-6xl mb-4"></ion-icon>
                <h2 class="text-2xl font-bold mb-2">Beri Ulasan</h2>
                <p class="text-white/80 text-sm">Masukan Anda sangat berarti bagi pengembangan Kampung Budaya.</p>
            </div>

            <!-- Sisi Kanan (Form) -->
            <div class="w-full md:w-2/3 p-8 md:p-10">
                <form action="{{ route('ulasan.store') }}" method="POST">
                    @csrf

                    <!-- Rating Input -->
                    <div class="mb-6">
                        <label class="block text-gray-700 font-bold mb-3">Rating Anda</label>
                        <div class="flex flex-row-reverse justify-end gap-2 group">
                            <!-- Teknik CSS Star Rating: Urutan terbalik di HTML agar hover effect jalan -->
                            
                            <input type="radio" id="star5" name="rating" value="5" class="peer/5 hidden" />
                            <label for="star5" class="text-3xl text-gray-300 cursor-pointer peer-checked/5:text-yellow-400 hover:text-yellow-400 peer-hover/5:text-yellow-400 transition">★</label>

                            <input type="radio" id="star4" name="rating" value="4" class="peer/4 hidden" />
                            <label for="star4" class="text-3xl text-gray-300 cursor-pointer peer-checked/4:text-yellow-400 hover:text-yellow-400 peer-hover/4:text-yellow-400 peer-checked/5:text-yellow-400 peer-hover/5:text-yellow-400 transition">★</label>

                            <input type="radio" id="star3" name="rating" value="3" class="peer/3 hidden" />
                            <label for="star3" class="text-3xl text-gray-300 cursor-pointer peer-checked/3:text-yellow-400 hover:text-yellow-400 peer-hover/3:text-yellow-400 peer-checked/4:text-yellow-400 peer-hover/4:text-yellow-400 peer-checked/5:text-yellow-400 peer-hover/5:text-yellow-400 transition">★</label>

                            <input type="radio" id="star2" name="rating" value="2" class="peer/2 hidden" />
                            <label for="star2" class="text-3xl text-gray-300 cursor-pointer peer-checked/2:text-yellow-400 hover:text-yellow-400 peer-hover/2:text-yellow-400 peer-checked/3:text-yellow-400 peer-hover/3:text-yellow-400 peer-checked/4:text-yellow-400 peer-hover/4:text-yellow-400 peer-checked/5:text-yellow-400 peer-hover/5:text-yellow-400 transition">★</label>

                            <input type="radio" id="star1" name="rating" value="1" class="peer/1 hidden" />
                            <label for="star1" class="text-3xl text-gray-300 cursor-pointer peer-checked/1:text-yellow-400 hover:text-yellow-400 peer-hover/1:text-yellow-400 peer-checked/2:text-yellow-400 peer-hover/2:text-yellow-400 peer-checked/3:text-yellow-400 peer-hover/3:text-yellow-400 peer-checked/4:text-yellow-400 peer-hover/4:text-yellow-400 peer-checked/5:text-yellow-400 peer-hover/5:text-yellow-400 transition">★</label>
                        </div>
                        @error('rating') <p class="text-red-500 text-xs mt-1">Silakan pilih bintang 1-5.</p> @enderror
                    </div>

                    <!-- Text Area -->
                    <div class="mb-6">
                        <label class="block text-gray-700 font-bold mb-2">Pesan Ulasan</label>
                        <textarea name="content" rows="4" class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:ring-2 focus:ring-[#756A60] outline-none transition" placeholder="Ceritakan pengalamanmu berkunjung ke sini..." required></textarea>
                        @error('content') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>

                    <!-- Buttons -->
                    <div class="flex gap-4">
                        <button type="submit" class="bg-[#756A60] text-white px-8 py-3 rounded-xl hover:bg-[#5e544d] transition font-bold shadow-lg w-full">
                            Kirim Ulasan
                        </button>
                    </div>
                    <div class="mt-4 text-center">
                         <a href="{{ route('ulasan.index') }}" class="text-gray-500 text-sm hover:underline">Kembali</a>
                    </div>

                </form>
            </div>
        </div>
    </div>
</x-layout>