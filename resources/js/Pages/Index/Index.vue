<template>
    <div>Index</div>
    <Link href="/show">Show Page</Link>
    <div>
        The message is {{ message }}
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