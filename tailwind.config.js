const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
	content: [
		'./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
		'./vendor/laravel/jetstream/**/*.blade.php',
		'./storage/framework/views/*.php',
		'./resources/views/**/*.blade.php',
		'./resources/**/*.js',
	],

	theme: {
		extend: {
			colors: {
				'primary': '#00A8E8',
				'secondary': '#007EA7',
				'complement': '#6B7280',
				'dark': '#00171F'
			},
			fontFamily: {
				sans: ['Nunito', ...defaultTheme.fontFamily.sans],
			},
		},
	},

	plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
