<script setup>
import { ref } from 'vue';
import Navbar from '@/Components/Navbar.vue';
import Footer from '@/Components/Footer.vue';

const logo = ref('https://hebbkx1anhila5yf.public.blob.vercel-storage.com/images-removebg-preview-aiDUiufkHUKJy1zOg8wFkVf8JgCSUE.png');
</script>

<template>
    <div class="min-h-screen flex flex-col">
        <Navbar :logo="logo" />
        <slot />
        <Footer :logo="logo" />
    </div>
</template>
