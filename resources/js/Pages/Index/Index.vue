<template>
    <div>Index</div>
    <Link href="/show">Show Page</Link>
    <div>
        <h1 className="text-3xl font-bold underline">
            {{ message }}
        </h1> 
    </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'

defineProps({
    message: String
})
</script>

<!-- Pour avoir un layout différent de celui de base qui a était entré dans le app.js -->
<!-- <script>
import MainLayout from '../../Layouts/MainLayout.vue';
export default {
    layout: MainLayout
}
</script> -->