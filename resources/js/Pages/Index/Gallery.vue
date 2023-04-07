<template>
    <div class="glide gallery">
      <div class="glide__track" data-glide-el="track">
        <ul class="glide__slides">
          <li class="glide__slide"><img src="https://picsum.photos/id/1/600/400" alt="Image 1"></li>
          <li class="glide__slide"><img src="https://picsum.photos/id/2/600/400" alt="Image 2"></li>
          <li class="glide__slide"><img src="https://picsum.photos/id/3/600/400" alt="Image 3"></li>
          <li class="glide__slide"><img src="https://picsum.photos/id/4/600/400" alt="Image 4"></li>
          <li class="glide__slide"><img src="https://picsum.photos/id/5/600/400" alt="Image 5"></li>
          <li class="glide__slide"><img src="https://picsum.photos/id/6/600/400" alt="Image 6"></li>
        </ul>
      </div>
  
      <div class="glide__arrows" data-glide-el="controls">
        <button class="glide__arrow glide__arrow--left" data-glide-dir="<">&#60;</button>
        <button class="glide__arrow glide__arrow--right" data-glide-dir=">">&#62;</button>
      </div>
    </div>
</template>
  
  <script>
  import { onMounted } from '@inertiajs/inertia';
  
  export default {
    setup() {
      onMounted(() => {
        // Initialisation de Glide.js
        new Glide('.glide', {
          type: 'carousel', // type de la galerie : carousel
          perView: 3, // nombre d'images visibles en même temps
          focusAt: 'center', // centre la première image visible
          gap: 30 // espace entre chaque image
        }).mount(); // monte la galerie
      });
    }
  };
  </script>
  
  <style>
  @import url('/css/app.css');
  
/* Style personnalisé de la galerie */
.glide {
  width: 100%;
  margin: 0 auto;
  overflow: hidden;
  position: relative;
}
.glide .glide__track {
  list-style: none;
  position: relative;
  z-index: 1;
}
.glide .glide__slides {
  display: flex;
  align-items: center;
}
.glide .glide__slide {
  width: 100%;
  margin-right: 30px;
  transition: transform 0.3s ease;
  transform-origin: center;
}
.glide .glide__slide img {
  display: block;
  width: 100%;
  height: auto;
  object-fit: cover;
}
.glide .glide__arrow {
  position: absolute;
  z-index: 2;
  top: 50%;
  transform: translateY(-50%);
  font-size: 2rem;
  background: transparent;
  border: none;
}

.gallery {
  max-width: 960px;
  margin: 0 auto;
}

.glide__slide {
  display: flex;
  justify-content: center;
  align-items: center;
}

.glide__slide img {
  max-width: 100%;
}

.glide__arrows {
  position: relative;
}

.glide__arrow {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  background-color: rgba(0, 0, 0, 0.5);
  color: #fff;
  border: none;
  cursor: pointer;
  padding: 10px;
  font-size: 20px;
  transition: background-color 0.2s;
}

.glide__arrow:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

.glide__arrow--left {
  left: 0;
}

.glide__arrow--right {
  right: 0;
}

</style>