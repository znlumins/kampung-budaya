import React from 'react';
import { motion } from 'framer-motion';

// Varian animasi untuk kartu: muncul dari bawah sambil fade in
const cardVariants = {
    hidden: { opacity: 0, y: 20 },
    visible: { opacity: 1, y: 0 }
};

export default function UlasanCard({ ulasan }) {
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