<template>
    <div class="lg:w-full lg:z-50">
        <div class="lg:flex lg:flex-col lg:mx-auto lg:mt-36 lg:h-[492px] lg:z-50 lg:relative ">
            <h2 class="lg:text-xl lg:mb-3 lg:text-gray-300 lg:z-50">Développeur Front-end</h2>
            <h1 class="lg:text-3xl lg:mb-3 lg:text-white lg:z-50">Brunin Quentin</h1>
            <h3 class="lg:text-sm lg:mb-4 lg:text-gray-300 lg:z-50">Un petit peu de Web Design aussi</h3>
            <p class="lg:text-4xl lg:mb-2 lg:text-white lg:z-50">CREATIF</p>
            <p class="lg:text-4xl lg:mb-2 lg:text-white lg:z-50">FORCE DE PROPOSITION</p>
            <p class="lg:text-4xl lg:text-white lg:z-50">TRAVAIL D'EQUIPE</p> 
            <CyberImage></CyberImage>
        </div>
        
        
        <ProjectFooter></ProjectFooter>
       
        <Footer></Footer>
        <ProgressBar></ProgressBar>
    </div>
    
     
</template>

<script>
import Footer from './Footer.vue';
import ProjectFooter from './ProjectFooter.vue';
import CyberImage from './CyberImage.vue';
import ProgressBar from './ProgressBar.vue';

export default {
  components: {
    Footer,
    ProjectFooter,
    CyberImage,
    ProgressBar,
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