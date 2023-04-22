<template>
    <body class="lg:flex lg:overflow-hidden bg">
        <header class="lg:flex lg:flex-col lg:w-[250px] lg:h-[100vh] lg:bg-[#81282B]">
            <h1 class="lg:mx-auto lg:text-[36px] lg:mt-4 lg:text-white lg:text-opacity-60"><Link href="/">Portfolio</Link></h1>
            

            <nav class="lg:flex lg:flex-col lg:mx-auto lg:mt-20 lg:h-[562px] lg:justify-between lg:z-50">

                <div class="lg:rounded-full lg:bg-[#B1464A] lg:w-[105px] lg:h-[105px] lg:relative">
                    <Link href="/">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-home lg:absolute lg:top-5 lg:left-5" width="64" height="64" viewBox="0 0 24 24" stroke-width="1.5" stroke="#BEBEBE" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <polyline points="5 12 3 12 12 3 21 12 19 12" />
                        <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                        <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                    </svg>
                    </Link>
                </div>

                <div class="lg:rounded-full lg:bg-[#B1464A] lg:w-[105px] lg:h-[105px] lg:relative">
                    <Link href="/show">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-book lg:absolute lg:top-5 lg:left-5" width="64" height="64" viewBox="0 0 24 24" stroke-width="1.5" stroke="#BEBEBE" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M3 19a9 9 0 0 1 9 0a9 9 0 0 1 9 0" />
                        <path d="M3 6a9 9 0 0 1 9 0a9 9 0 0 1 9 0" />
                        <line x1="3" y1="6" x2="3" y2="19" />
                        <line x1="12" y1="6" x2="12" y2="19" />
                        <line x1="21" y1="6" x2="21" y2="19" />
                    </svg>
                    </Link>
                </div>


                <div class="lg:rounded-full lg:bg-[#B1464A] lg:w-[105px] lg:h-[105px] lg:relative">
                    <Link href="/contact">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail-opened lg:absolute lg:top-5 lg:left-5" width="64" height="64" viewBox="0 0 24 24" stroke-width="1.5" stroke="#BEBEBE" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <polyline points="3 9 12 15 21 9 12 3 3 9" />
                        <path d="M21 9v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10" />
                        <line x1="3" y1="19" x2="9" y2="13" />
                        <line x1="15" y1="13" x2="21" y2="19" />
                    </svg>
                    </Link>
                </div>
            </nav>
        </header>

        <!-- ICON SOCIAL -->

        <div class="lg:flex lg:flex-col lg:mt-4 lg:ml-20">
            <div class="lg:w-[150px] lg:flex lg:justify-between">
                <div class="lg:rounded-full lg:w-[46px] lg:h-[46px] lg:relative">
                    <a href="https://www.facebook.com/profile.php?id=100088254378215" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-facebook" width="45" height="45" viewBox="0 0 24 24" stroke-width="1.5" stroke="#5B1013" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
                        </svg>
                    </a>
                </div>

                <div class="lg:rounded-full lg:w-[46px] lg:h-[46px] lg:relative">
                    <a href="https://github.com/QuentinBrunin" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-github" width="46" height="46" viewBox="0 0 24 24" stroke-width="1.5" stroke="#5B1013" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M9 19c-4.3 1.4 -4.3 -2.5 -6 -3m12 5v-3.5c0 -1 .1 -1.4 -.5 -2c2.8 -.3 5.5 -1.4 5.5 -6a4.6 4.6 0 0 0 -1.3 -3.2a4.2 4.2 0 0 0 -.1 -3.2s-1.1 -.3 -3.5 1.3a12.3 12.3 0 0 0 -6.2 0c-2.4 -1.6 -3.5 -1.3 -3.5 -1.3a4.2 4.2 0 0 0 -.1 3.2a4.6 4.6 0 0 0 -1.3 3.2c0 4.6 2.7 5.7 5.5 6c-.6 .6 -.6 1.2 -.5 2v3.5" />
                        </svg>
                    </a>
                </div>

                <div class="lg:rounded-full lg:w-[46px] lg:h-[46px] lg:relative">
                    <a href="https://www.linkedin.com/in/quentin-brunin-91b74a112/" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-linkedin" width="48" height="48" viewBox="0 0 24 24" stroke-width="1.5" stroke="#5B1013" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <rect x="4" y="4" width="16" height="16" rx="2" />
                            <line x1="8" y1="11" x2="8" y2="16" />
                            <line x1="8" y1="8" x2="8" y2="8.01" />
                            <line x1="12" y1="16" x2="12" y2="11" />
                            <path d="M16 16v-3a2 2 0 0 0 -4 0" />
                        </svg>
                    </a>
                </div>
            </div>
           
            <div>
                <slot></slot>
            </div>
        </div>

       
    </body>
  
</template>

<script setup>
import { Link } from '@inertiajs/vue3';

</script>

<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');

body{
    background: rgb(177,70,74);
    background: linear-gradient(180deg, rgba(177,70,74,1) 0%, rgba(123,52,55,1) 100%);
    width: 100%;
    height: 100vh;
    font-family: 'Poppins', sans-serif;
}

.bg{
    background-image: url(../img/bg2.png);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: right;
    z-index: 0;
}

.icon-tabler-mail-opened:hover, .icon-tabler-user:hover, .icon-tabler-book:hover, .icon-tabler-home:hover,
.icon-tabler-brand-linkedin:hover, .icon-tabler-brand-github:hover, .icon-tabler-brand-facebook:hover
{
    stroke: white;
    cursor: pointer;
}
</style>
