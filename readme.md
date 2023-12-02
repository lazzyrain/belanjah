### Module yang siap pakai

- Bootstrap 5.3
- Select 2
- Material Symbols
- Font Awesome
- Izitoast
- Owl Carousel 2
- Moment JS
- Jquery-3.6.0 & Jquery-ui

### Component yang sudah ada

- Loading spinner
- Card menu
- Card menu slim
- Back button
- Drawer loading

##
Untuk menjalankan projek, kamu membutuhkan beberapa package yang perlu di install.

`guzzlehttp/guzzle`

`Tailwind-CSS`

### guzzlehttp/guzzle

- Untuk memasang guzzlehttp/guzzle jalankan kode berikut :

```bash
composer require guzzlehttp/guzzle
```
pastikan sudah terinstall **PHP** dan **composer**.

### Tailwind-CSS

- Untuk memasang tailwind-css jalankan kode berikut :

```bash
npm install -D tailwindcss
npx tailwindcss init
```
pastikan sudah terinstall **Node JS** dan **NPM**.

- pada **tailwind.config.js** ikuti systax dibawah :
```javascript
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
    // colors: {
    //     'primary': '#190482',
    //     'secondary': '#7752FE',
    //     'tertiary': '#8E8FFA',
    //     'subtitle': '#C2D9FF',
    //     'white': '#FFFFFF',
    //     'grey': '#D9D9D9',
    //     'light-grey': '#EFEFEF',
    // },
    fontFamily: {
        inter: ['Inter']
    }
    }
},
plugins: [],
}
```

- untuk menjalankan tailwind *build process*, jalankan kode berikut
```bash
npx tailwindcss -i ./assets/css/tailwind.css -o ./assets/css/custom.css --watch
```

###

**Happy Coding** 👨‍💻

![200w](https://github.com/lazzyrain/lazzyrain-codeigniter3-template-v2/assets/90812119/e9f77339-01e0-4f49-b40e-2db973c16d25)
