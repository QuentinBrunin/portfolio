<template>

<div class="lg:w-full lg:z-50">
        <div class="lg:flex lg:flex-col lg:mx-auto lg:mt-36 lg:h-[492px] lg:z-50 lg:relative">
            <div class="lg:-mt-16 lg:z-50">
              <h1 class="largeur lg:text-4xl lg:mb-3 lg:text-white lg:z-50">Brunin Quentin</h1>
              <h2 class="lg:text-xl lg:mb-6 lg:text-gray-300 lg:z-50 ">Développeur Front-end</h2>
            
              <p class="largeur lg:text-3xl lg:text-white lg:z-50 ">
                Cela fait 1 an que je suis développeur, j'ai suivi <br>
                une formation avec M2i, je me suis lancé en freelance juste après. <br><br>

                J'aime créer des interfaces qui sortent de l'ordinaire et je suis toujours <br>
                à l'affut de nouveauté en web design. <br><br>

                Si vous avez un projet, contactez-moi <a href="">💬</a>
              </p>
            </div>
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

<style scoped>
@media (max-width: 1275px) {
    .largeur{
      width: 900px;
      font-size: 22px;
      
    }
  }

@media (max-width: 1275px) {
    .largeur{
      width: 800px;
      font-size: 22px;
    }
  }  
</style>
