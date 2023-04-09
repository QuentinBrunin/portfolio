<template>
    <div class="lg:absolute  lg:z-10 lg:bottom-10 lg:flex lg:flex-col">
        <h3 class="lg:text-white lg:text-[24px] lg:-ml-14">Mes Projets</h3>
        
          <Gallery class=" lg:flex"></Gallery>
        
        
        <!-- <div class="lg:rounded-3xl lg:w-[260px] lg:h-[291px] lg:bg-[#81282B]  lg:pt-[14px]">
            <img class="lg:rounded-3xl lg:w-[225px] lg:h-[214px] lg:mx-auto lg:object-cover" src="img/millam.jpg" alt="image du site de la ville de Millam">
            <figcaption class="lg:text-center lg:text-white lg:mt-1">Maquette pour la Mairie de Millam</figcaption>
        </div> -->
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

