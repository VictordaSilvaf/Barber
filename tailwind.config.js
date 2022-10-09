const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter var', ...defaultTheme.fontFamily.sans],
                dancing: ['Dancing'],
                dancingScript: ['Dancing Script', 'cursive']
            },
            colors: {
                'lightning': {
                    'first': '#f6f6f6',
                    'second': '#e8e8e8',
                },
                'darkness': '#333333',
                'blood': {
                    'first': '#b90504',
                    'second': '#990100',
                }
            },
        },
    },
    variants: {
        extend: {
            backgroundColor: ['active'],
        }
    },
    content: [
        './app/**/*.php',
        './resources/**/*.html',
        './resources/**/*.js',
        './resources/**/*.jsx',
        './resources/**/*.ts',
        './resources/**/*.tsx',
        './resources/**/*.php',
        './resources/**/*.vue',
        './resources/**/*.twig',
        "./node_modules/flowbite/**/*.js"
    ],
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
        require('flowbite/plugin')
    ],
    darkMode: 'class',
}
