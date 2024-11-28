import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    darkMode: 'class',
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
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                dark: {
                    bg: '#252525', // Un noir plus neutre, souvent utilisé dans les designs modernes
                    text: '#f5f5f5', // Texte clair mais légèrement adouci pour réduire la dureté du contraste
                },                              
                light: {
                    bg: '#ffffff', // Couleur de fond pour le mode clair
                    text: '#000000', // Couleur du texte pour le mode clair
                }
            },
        },
    },
    plugins: [
        
    ],
};
