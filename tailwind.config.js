import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],   plugins: [
      // ...
      require('@tailwindcss/forms'),
      require('@tailwindcss/aspect-ratio'),
    ],

    theme: {
        extend: {
            colors: {
                'duty': '#3a7d84',  // Example blue color for tasks
                'habit': '#5dddb7',
                'fun': '#38a6b3',
                
                'dutyLight': "#256f77",
        
        
                'morning' : '#E6E600',
                'afternoon' : '#DAA520',
                'evening' : '#483D8B',
                'night' : '#4B0082'
              },
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                'SourceSans': ['source sans', 'sans-serif'],
                'NovecentoBookRegular': ['Novecento Book Regular', 'sans-serif'],
                'NovecentoMedium': ['Novecento Medium', 'sans-serif'],
                'NovecentoRegular': ['Novecento Regular', 'sans-serif'],
                'NovecentoCondLight': ['Novecento Cond Light', 'sans-serif'],
                'NovecentoCondRegular': ['Novecento Cond Regular', 'sans-serif'],
                'NovecentoCondBold': ['Novecento Cond Bold', 'sans-serif'],
            },
        },
    },

    plugins: [forms],
};

