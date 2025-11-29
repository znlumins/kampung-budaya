import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Poppins', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'kb-cream': '#FFFDF5',    // Warna background utama (lebih terang/krem)
                'kb-dark': '#463C38',     // Warna coklat gelap dominan (Dark Brown)
                'kb-gold': '#F0E0B8',     // Warna tombol (Beige/Gold muda)
                'kb-orange': '#C97C5D',   // Warna aksen icon garis
            },
            borderRadius: {
                '4xl': '2.5rem',          // Lengkungan sudut yang besar
                '5xl': '3.5rem',
            }
        },
    },
    plugins: [],
};