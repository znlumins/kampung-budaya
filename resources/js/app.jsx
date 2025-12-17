import React from 'react';
import ReactDOM from 'react-dom/client';
import { motion } from 'framer-motion';

// --- KOMPONEN KARTU ---
// Ini adalah komponen untuk merender satu kartu ulasan.
const cardVariants = { 
    hidden: { opacity: 0, y: 20 }, 
    visible: { opacity: 1, y: 0 } 
};

function UlasanCard({ ulasan }) {
    return (
        <motion.div
            variants={cardVariants}
            className="bg-[#756A60] p-6 rounded-[2rem] text-white shadow-lg border border-white/10 flex flex-col h-full"
        >
            <div className="flex gap-4 items-center mb-4">
                <div className="w-14 h-14 bg-gray-300 rounded-full flex items-center justify-center overflow-hidden shrink-0">
                    <ion-icon name="person" class="text-3xl text-gray-600"></ion-icon>
                </div>
                <div>
                    <h3 className="font-bold text-lg capitalize">{ulasan.nama}</h3>
                    <p className="text-xs text-gray-300 capitalize">{ulasan.status}</p>
                    <div className="flex text-yellow-400 text-sm mt-1">
                        {[...Array(ulasan.rating)].map((_, i) => <ion-icon key={i} name="star"></ion-icon>)}
                        {[...Array(5 - ulasan.rating)].map((_, i) => <ion-icon key={i} name="star-outline" class="text-gray-400"></ion-icon>)}
                    </div>
                </div>
            </div>
            <div className="w-full h-[1px] bg-white/30 my-3"></div>
            <p className="text-sm text-gray-200 leading-relaxed font-light flex-grow">
                "{ulasan.deskripsi}"
            </p>
            <p className="text-[10px] text-gray-400 mt-4 text-right italic">
                {ulasan.created_at_human}
            </p>
        </motion.div>
    );
}

// --- APLIKASI UTAMA ---
// Ini adalah komponen utama yang mengatur semua kartu ulasan.
const gridVariants = { 
    hidden: { opacity: 0 }, 
    visible: { 
        opacity: 1, 
        transition: { 
            staggerChildren: 0.1 
        } 
    } 
};

function UlasanApp({ ulasans }) {
    if (ulasans.length === 0) {
        return (
            <div className="col-span-1 md:col-span-2 text-center py-20 bg-[#F5E6CA]/50 rounded-[2rem] border-2 border-dashed border-[#A85D36]/50">
                <p className="text-[#3E2F2B] text-xl font-bold">Belum ada ulasan.</p>
                <p className="text-gray-500">Jadilah orang pertama yang memberikan ulasan!</p>
            </div>
        );
    }
    return (
        <motion.div
            variants={gridVariants}
            initial="hidden"
            animate="visible"
            className="grid grid-cols-1 md:grid-cols-2 gap-6"
        >
            {ulasans.map(ulasan => (
                <UlasanCard key={ulasan.id} ulasan={ulasan} />
            ))}
        </motion.div>
    );
}


// ========================================================================
// ==== PERBAIKAN UTAMA: CARA MENGAMBIL DATA DAN MERENDER APLIKASI ====
// ========================================================================
const container = document.getElementById('react-ulasan-app');

// Cek jika "wadah" dan variabel global 'window.ulasansData' sudah ada
if (container && typeof window.ulasansData !== 'undefined') {
    
    // Ambil data dari variabel global, bukan dari 'dataset'
    const ulasansData = window.ulasansData;
    
    const root = ReactDOM.createRoot(container);
    root.render(<UlasanApp ulasans={ulasansData} />);
}