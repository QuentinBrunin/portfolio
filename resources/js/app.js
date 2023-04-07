import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'
import MainLayout from './Layouts/MainLayout.vue'
import '../css/app.css'
import Glide, { Controls } from '@glidejs/glide/dist/glide.modular.esm'


createInertiaApp({
    resolve: name => {
      const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
      const page = pages[`./Pages/${name}.vue`]
      page.default.layout = page.default.layout || MainLayout
  
      return page
    },
    setup({ el, App, props, plugin }) {
      createApp({ render: () => h(App, props) })
        .use(plugin)
        .mount(el)
    },
   
});

   // Initialisation de Glide.js
   new Glide('.glide', {
    type: 'carousel', // type de la galerie : carousel
    perView: 3, // nombre d'images visibles en même temps
    focusAt: 'center', // centre la première image visible
    gap: 30 // espace entre chaque image
  }).mount({ Controls }); // monte la galerie


