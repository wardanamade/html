/** @type {import('tailwindcss').Config} */

const colors = require('tailwindcss/colors')

module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./resources/**/*.ts",
    ],
    theme: {
        extend: {
            fontFamily: {
                'sans': ['Inter', 'sans-serif'],
            },
            colors: {
                'primary': '#1E40AF',
                'secondary': '#3B82F6',
                'danger': '#EF4444',
                'success': '#10B981',
                'warning': '#F59E0B',
                'info': '#3B82F6',
                'dark': '#111827',
                'light': '#F3F4F6',
                'white': '#FFFFFF',
                'black': '#000000',
                'gray': {
                    '50': '#F9FAFB',
                    '100': '#F3F4F6',
                    '200': '#E5E7EB',
                    '300': '#D1D5DB',
                    '400': '#9CA3AF',
                    '500': '#6B7280',
                    '600': '#4B5563',
                    '700': '#374151',
                    '800': '#1F2937',
                    '900': '#111827',
                },
                rose: colors.rose,
            },
        },
    },
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
    ],
}
