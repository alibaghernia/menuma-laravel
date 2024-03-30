import preset from './vendor/filament/support/tailwind.config.preset'

export default {
    presets: [preset],
    content: [
        './app/Filament/**/*.php',
        './resources/views/**/*.blade.php',
        './vendor/filament/**/*.blade.php',
    ],
    theme: {
        extend: {
            backgroundImage: {
                'gradient-radial': 'radial-gradient(var(--tw-gradient-stops))',
                'gradient-conic':
                    'conic-gradient(from 180deg at 50% 50%, var(--tw-gradient-stops))',
            },
            colors: {
                primary: '#3177FF',
                typography: '#434343',
                secondary: '#EEB33F',
                background: '#FBFBFB',
                more: '#EEB33F',
            },
        },
        fontFamily: {
            sans: ['Vazirmatn FD','sans-serif'],
            // vazirmatn: ["Vazirmatn"],
        },
    },
}
