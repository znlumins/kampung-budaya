import React from 'react';
import { motion } from 'framer-motion';

// Komponen ini menerima 'children' (elemen yang dibungkus) dan className
export default function AnimateOnScroll({ children, className }) {
    return (
        <motion.div
            className={className}
            // Animasi awal (tersembunyi)
            initial={{ opacity: 0, y: 50 }}
            // Animasi saat masuk ke layar
            whileInView={{ opacity: 1, y: 0 }}
            // Pengaturan viewport: animasi hanya berjalan sekali
            viewport={{ once: true }}
            // Durasi transisi
            transition={{ duration: 0.8, ease: 'easeOut' }}
        >
            {children}
        </motion.div>
    );
}