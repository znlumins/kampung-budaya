<x-layout>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 py-12">
        
        <!-- Header -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-[#3E2F2B] mb-4">Ulasan Pengunjung</h1>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                Apa kata mereka tentang Kampung Budaya Ketawang Gede?
            </p>
            
            <!-- Tombol Tambah Ulasan -->
            <div class="mt-8">
                <a href="{{ route('ulasan.create') }}" class="inline-block bg-[#756A60] text-white px-8 py-3 rounded-full font-semibold hover:bg-[#5e544d] transition shadow-lg transform hover:-translate-y-1">
                    <span class="flex items-center gap-2">
                        <ion-icon name="create-outline" class="text-xl"></ion-icon>
                        Tulis Ulasan Kamu
                    </span>
                </a>
            </div>
        </div>

        <!-- Notifikasi Sukses -->
        @if(session('success'))
            <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-8 rounded shadow-sm max-w-3xl mx-auto">
                {{ session('success') }}
            </div>
        @endif

        <!-- Grid Ulasan -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($ulasans as $ulasan)
                <div class="bg-white p-8 rounded-[2rem] shadow-lg border border-gray-100 hover:shadow-xl transition duration-300 relative overflow-hidden group">
                    <!-- Batik Pattern Background (Optional Decoration) -->
                    <div class="absolute top-0 right-0 w-24 h-24 bg-[#F5E6CA] rounded-bl-full opacity-20 -mr-4 -mt-4 transition group-hover:scale-110"></div>
                    
                    <!-- Rating -->
                    <div class="flex text-yellow-400 mb-4 text-lg">
                        @for($i = 0; $i < $ulasan->rating; $i++)
                            <ion-icon name="star"></ion-icon>
                        @endfor
                        @for($i = $ulasan->rating; $i < 5; $i++)
                            <ion-icon name="star-outline" class="text-gray-300"></ion-icon>
                        @endfor
                    </div>

                    <!-- Isi Ulasan -->
                    <p class="text-gray-600 italic mb-6 leading-relaxed min-h-[4rem]">
                        "{{ $ulasan->content }}"
                    </p>

                    <!-- Info User -->
                    <div class="flex items-center gap-4 border-t pt-4 border-gray-100">
                        <!-- Avatar Inisial -->
                        <div class="w-10 h-10 bg-[#3E2F2B] text-white rounded-full flex items-center justify-center font-bold text-sm shadow-md">
                            {{ substr($ulasan->user->name, 0, 1) }}
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-800 text-sm">{{ $ulasan->user->name }}</h4>
                            <p class="text-xs text-gray-400">{{ $ulasan->created_at->diffForHumans() }}</p>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-span-full text-center py-12">
                    <div class="inline-block p-6 rounded-full bg-gray-100 mb-4">
                        <ion-icon name="chatbubbles-outline" class="text-4xl text-gray-400"></ion-icon>
                    </div>
                    <h3 class="text-xl font-bold text-gray-600">Belum ada ulasan</h3>
                    <p class="text-gray-500">Jadilah yang pertama memberikan ulasan!</p>
                </div>
            @endforelse
        </div>

        <!-- Pagination -->
        <div class="mt-12">
            {{ $ulasans->links() }}
        </div>
    </div>
</x-layout>