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
				'dark': '#00171F',
				'yellow-ornament': '#EDBF2D'
			},
			fontFamily: {
				sans: ['Nunito', ...defaultTheme.fontFamily.sans],
				viga: ['Viga']
			},
			height: {
				'62': '15.15rem',
				'112': '28rem',
				'120': '30rem',
				'128': '32rem'
			},
			width: {
				'62': '15.15rem'
			}
		},
	},

	plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
