/** @type {import('tailwindcss').Config} */
module.exports = {
	prefix: 'tw-',
	content: [
		'./application/views/**/*.{php,html,js}'
	],
	theme: {
		extend: {
			colors: {
				'primary': '#0C356A',
				'secondary': '#0174BE',
				'tertiary': '#FFC436',
				'subtitle': '#FFF0CE',
				'white': '#FFFFFF',
				'grey': '#D9D9D9',
				'light-grey': '#EFEFEF',
			},
			fontFamily: {
				inter: ['Inter']
			}
		}
	},
	plugins: [],
}
