import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            animation: {
				infiniteLoop: "infiniteLoop .8s infinite",
				infiniteLoop2: "infiniteLoop2 .8s infinite",
				growNshrink: "growNshrink 5s infinite",
            },
            keyframes: {
				infiniteLoop: {
					"0%": { transform: "translateX(-100%) scale(.4)" },
					"50%": { transform: "scale(1.6)" },
					"100%": { transform: "translateX(100%) scale(.4)" },
				},
				infiniteLoop2: {
					"0%": { transform: "translateX(100%) scale(.4) rotateY(180deg)" },
					"50%": { transform: "scale(1.6)  rotateY(180deg)" },
					"100%": { transform: "translateX(-100%) scale(.4)  rotateY(180deg)" },
				},
				growNshrink: {
					"0%": { transform: "scale(1.08)" },
					"50%": { transform: "scale(1.1)" },
					"100%": { transform: "scale(1.08)" },
				},
            },
        },
    },

    plugins: [forms],
};
