<template>
  <div class="slider lg:overflow-hidden lg:hover:cursor-move lg:w-[800px] lg:-ml-20 lg:z-50" @mousedown="startDragging" @mousemove="drag" @mouseup="stopDragging">
    <div class="slider-track lg:flex" :style="{ transform: `translateX(${-position}px)` }">
      <div class="slider-item lg:rounded-3xl lg:w-[260px] lg:h-[291px] lg:bg-[#81282B] lg:pt-[14px]  lg:mx-5 lg:z-50" v-for="(item, index) in items" :key="index">
        <img class="lg:rounded-3xl lg:w-[225px] lg:h-[214px] lg:mx-auto lg:object-cover lg:z-50 " :src="item.src" :alt="item.alt">
        <a :href="item.url" target="_blank" class="lg:text-white lg:mt-1 lg:text-sm block lg:text-center lg:px-4 lg:z-50"> <span class="lg:hover:cursor-pointer"> {{ item.figcaption }}</span></a>
      </div>
    </div>
  </div>
</template>

<script>
import { reactive } from 'vue';
import { router } from '@inertiajs/vue3'

export default {
  data() {
    return {
      position: 0,
      dragging: false,
      startX: 0,
      currentX: 0,
      items: [
        { src: '../img/millam.JPG', alt: 'Image 1', figcaption: 'Maquette pour la Mairie de Millam', url: 'https://xd.adobe.com/view/0b02a9ae-8bda-430a-bfcd-8ea391b07fe1-5e51/?fullscreen' },
        { src: '../img/logo.png', alt: 'Image 2', figcaption: 'Création du site Deviniteam.com', url:'https://deviniteam.com/' },
        { src: '../img/logo2.png', alt: 'Image 3', figcaption: "La Patrouille d'Arthur, emballage de bonbons et boissons" },
      ],
    };
  },
  methods: {
    startDragging(event) {
      this.dragging = true;
      this.startX = event.clientX || event.touches[0].clientX;
    },
    drag(event) {
      if (!this.dragging) {
        return;
      }

      event.preventDefault();

      this.currentX = event.clientX || event.touches[0].clientX;
      const diff = this.currentX - this.startX;
      this.position += diff;
      this.startX = this.currentX;
    },
    stopDragging() {
      this.dragging = false;
      const direction = this.position > 0 ? 'right' : 'left';
      const threshold = 100;
      const shouldChange = Math.abs(this.position) > threshold;

      if (shouldChange) {
        if (direction === 'right') {
          router.get(route('slider.prev'));
        } else if (direction === 'left') {
          router.get(route('slider.next'));
        }
      } else {
        this.position = 0;
      }
    },
  },
};
</script>
