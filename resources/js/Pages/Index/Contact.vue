<template>
     <div class="lg:w-full lg:z-50">
        <div class="lg:flex lg:flex-col lg:mx-auto lg:mt-36 lg:h-[492px] lg:z-50 lg:relative">
           <form action="" method="GET"></form>
           
        </div>
        
        
        
       
        <Footer></Footer>
        
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