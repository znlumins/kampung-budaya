import React from 'react';
import ReactDOM from 'react-dom/client';
import { motion } from 'framer-motion';

// --- KUMPULAN "RESEP" ANIMASI (VARIANTS) ---

// Resep untuk container yang menganimasikan anaknya satu per satu (stagger)
const staggerContainer = {
    hidden: { opacity: 0 },
    visible: {
        opacity: 1,
        transition: {
            staggerChildren: 0.2, // Jeda 0.2 detik antar animasi anak
        },
    },
};

// Resep untuk elemen yang muncul dari bawah (fade-in & slide-up)
const fadeInFromBottom = {
    hidden: { y: 40, opacity: 0 },
    visible: { y: 0, opacity: 1, transition: { duration: 0.8, ease: 'easeOut' } },
};

// Resep untuk elemen yang muncul dari kiri (fade-in & slide-right)
const fadeInFromLeft = {
    hidden: { x: -50, opacity: 0 },
    visible: { x: 0, opacity: 1, transition: { duration: 0.8, ease: 'easeOut' } },
};

// Resep untuk elemen yang muncul dari kanan (fade-in & slide-left)
const fadeInFromRight = {
    hidden: { x: 50, opacity: 0 },
    visible: { x: 0, opacity: 1, transition: { duration: 0.8, ease: 'easeOut' } },
};

// Resep untuk elemen yang muncul sambil membesar (scale-up)
const scaleUp = {
    hidden: { scale: 0.9, opacity: 0 },
    visible: { scale: 1, opacity: 1, transition: { duration: 0.6, ease: 'easeOut' } },
};


// --- FUNGSI UTAMA UNTUK MENERAPKAN ANIMASI ---
function applyAnimation(elementId, variant, isStaggerContainer = false) {
    const container = document.getElementById(elementId);
    if (!container) return; // Jika elemen tidak ditemukan, hentikan

    const originalHTML = container.innerHTML;
    const root = ReactDOM.createRoot(container);
    
    // Jika ini adalah container stagger
    if (isStaggerContainer) {
        // Ambil semua anak langsung dari container dan bungkus dengan motion.div
        const childrenWithAnimation = Array.from(container.children).map((child, index) => {
            return (
                <motion.div key={index} variants={variant}>
                    <div dangerouslySetInnerHTML={{ __html: child.outerHTML }} />
                </motion.div>
            );
        });

        root.render(
            <motion.div variants={staggerContainer} initial="hidden" whileInView="visible" viewport={{ once: true }}>
                {childrenWithAnimation}
            </motion.div>
        );
    } else {
        // Jika ini animasi tunggal
        root.render(
            <motion.div variants={variant} initial="hidden" whileInView="visible" viewport={{ once: true }}>
                <div dangerouslySetInnerHTML={{ __html: originalHTML }} />
            </motion.div>
        );
    }
}

// --- JALANKAN SEMUA ANIMASI SETELAH HALAMAN DIMUAT ---
document.addEventListener('DOMContentLoaded', () => {
    // 1. Animasi Stagger untuk konten Hero
    applyAnimation('hero-content', fadeInFromBottom, true);

    // 2. Animasi dari kiri untuk kolom teks 'Tentang'
    applyAnimation('tentang-left', fadeInFromLeft);

    // 3. Animasi Stagger untuk kartu-kartu 'Tentang' di kanan
    applyAnimation('tentang-right-cards', fadeInFromRight, true);

    // 4. Animasi Scale Up untuk kartu Games dan Ulasan
    applyAnimation('games-card', scaleUp);
    applyAnimation('ulasan-card', scaleUp);
});