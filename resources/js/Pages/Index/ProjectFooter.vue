<template>
    <div class="lg:absolute  lg:z-50 lg:bottom-10 lg:flex lg:flex-col">
        <h3 class="lg:text-white lg:text-[24px] lg:-ml-14">Mes Projets</h3>
        <Gallery class="lg:flex"></Gallery>
      </div>
</template>

<script>
import Gallery from './Gallery.vue';


export default {
  components: {
    Gallery,
  }
}
</script>

