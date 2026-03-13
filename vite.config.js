import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    darkMode: 'class',
    theme: {
        screens: {
            sm: "480px",
            md: "768px",
            lg: "1024px"
        },
        extend: {
            colors: {
                primaryColor: '#010a5e',
                primaryColorLight: "#010d78",
                secondaryColor: '#FFCC00',
                paragraphColor: '#c0c0c0',
                whiteColor: '#fff',
                blackColor: "#000",
                greenColor: "#007936",
                redColor: "#cc3433",
                darkColor: '#000',
                darkColorLight: "#171717",
            },
            keyframes: {
                move: {
                "50%": {transform: 'translateY(-1rem)'}
                }
            },
            animation: {
                'movingY': 'move 2s linear infinite'
            }
        },
        container: {
            center: true,
            padding: {
                DEFAULT: '1.8rem',
                sm: '1.5rem'
            }
        },
        fontFamily: {
            poppins: ['Poppins', 'sans-serif'],
        }
    },
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        tailwindcss(),
    ],
    server: {
        watch: {
            ignored: ['**/storage/framework/views/**'],
        },
    },
});
