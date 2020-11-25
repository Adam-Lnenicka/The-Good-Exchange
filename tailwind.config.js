const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    variants: {
        opacity: ['responsive', 'hover', 'focus', 'disabled'],
    },

    plugins: [require('@tailwindcss/ui')],
    // theme: {
    //     screens: {
    //       'tablet': '640px',
    //       // => @media (min-width: 640px) { ... }
    
    //       'laptop': '1024px',
    //       // => @media (min-width: 1024px) { ... }
    
    //       'desktop': '999px',
    //       // => @media (min-width: 1280px) { ... }
    //     },
    //   }
};
