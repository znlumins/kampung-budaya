<x-layout :hideFooter="true">
    <!-- Container Utama -->
    <div class="min-h-[85vh] flex items-center justify-center py-10 px-4">
        
        <!-- Card Wrapper (Flexbox untuk Split Layout) -->
        <div class="flex flex-col md:flex-row w-full max-w-5xl bg-[#F5E6CA] rounded-[2.5rem] shadow-2xl overflow-hidden min-h-[550px]">
            
            <!-- BAGIAN KIRI: FORM -->
            <div class="w-full md:w-1/2 p-10 md:p-14 flex flex-col justify-center">
                
                <form action="#" method="POST" class="space-y-6">
                    @csrf
                    
                    <!-- Input Nama -->
                    <div class="space-y-2">
                        <label for="name" class="block text-sm font-medium text-black pl-1">Nama</label>
                        <input type="text" name="name" id="name" required 
                            class="w-full h-12 px-4 bg-[#756A60] text-white placeholder-gray-300 rounded-md border-none focus:ring-2 focus:ring-[#5C534B] focus:outline-none transition">
                    </div>

                    <!-- Input Email -->
                    <div class="space-y-2">
                        <label for="email" class="block text-sm font-medium text-black pl-1">Email</label>
                        <input type="email" name="email" id="email" required 
                            class="w-full h-12 px-4 bg-[#756A60] text-white placeholder-gray-300 rounded-md border-none focus:ring-2 focus:ring-[#5C534B] focus:outline-none transition">
                    </div>

                    <!-- Input Password -->
                    <div class="space-y-2">
                        <label for="password" class="block text-sm font-medium text-black pl-1">Password</label>
                        <input type="password" name="password" id="password" required 
                            class="w-full h-12 px-4 bg-[#756A60] text-white placeholder-gray-300 rounded-md border-none focus:ring-2 focus:ring-[#5C534B] focus:outline-none transition">
                    </div>

                    <!-- Input Confirm Password (Hidden/Optional sesuai gambar, tapi wajib di Laravel) -->
                    <!-- Jika ingin disembunyikan agar persis gambar, hapus div ini. Tapi register butuh konfirmasi biasanya -->
                    <div class="space-y-2 hidden"> 
                        <label class="block text-sm font-medium text-black pl-1">Confirm Password</label>
                        <input type="password" name="password_confirmation" 
                            class="w-full h-12 bg-[#756A60] rounded-md border-none">
                    </div>

                    <!-- Tombol Action -->
                    <div class="pt-6 flex gap-4">
                        <!-- Tombol Sign In (Link ke Login) -->
                        <a href="/login" class="px-8 py-2.5 rounded-full bg-[#756A60] text-white font-medium hover:bg-[#5e544d] transition duration-300 text-center shadow-md">
                            Sign in
                        </a>

                        <!-- Tombol Sign Up (Submit Form) -->
                        <button type="submit" class="px-8 py-2.5 rounded-full bg-[#756A60] text-white font-medium hover:bg-[#5e544d] transition duration-300 shadow-md">
                            Sign up
                        </button>
                    </div>

                </form>
            </div>

            <!-- BAGIAN KANAN: TEKS -->
            <div class="w-full md:w-1/2 bg-[#756A60] p-10 md:p-14 flex flex-col justify-center text-white relative">
                <!-- Hiasan Overlay (Opsional biar ga terlalu polos) -->
                
                <h1 class="text-4xl md:text-5xl font-bold leading-tight mb-6">
                    Welcome To <br>
                    Kampung Budaya <br>
                    Ketawang Gede
                </h1>

                <p class="text-white/80 text-lg leading-relaxed font-light">
                    Silahkan Login untuk mengakses lebih banyak fitur dalam website!
                </p>
            </div>

        </div>
    </div>
</x-layout>