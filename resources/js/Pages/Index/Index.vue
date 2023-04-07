<template>
    <div class="lg:w-full">
        <div class="lg:flex lg:flex-col lg:mx-auto lg:mt-36 lg:h-[60vh]">
            <h2 class="lg:text-xl lg:mb-3 lg:text-gray-300">Développeur Front-end</h2>
            <h1 class="lg:text-3xl lg:mb-3 lg:text-white">Brunin Quentin</h1>
            <h3 class="lg:text-sm lg:mb-4 lg:text-gray-300">Un petit peu de Web Design aussi</h3>
            <p class="lg:text-4xl lg:mb-2 lg:text-white">CREATIF</p>
            <p class="lg:text-4xl lg:mb-2 lg:text-white">FORCE DE PROPOSITION</p>
            <p class="lg:text-4xl lg:text-white">TRAVAIL D'EQUIPE</p>
        </div>

        <ProjectFooter></ProjectFooter>

        <Footer></Footer>
        
    </div>
    
     
</template>

<script>
import Footer from './Footer.vue';
import ProjectFooter from './ProjectFooter.vue';

export default {
  components: {
    Footer,
    ProjectFooter
  }
}
</script>

<!-- Pour avoir un layout différent de celui de base qui a était entré dans le app.js -->
<!-- <script>
import MainLayout from '../../Layouts/MainLayout.vue';
export default {
    layout: MainLayout
}
</script> -->