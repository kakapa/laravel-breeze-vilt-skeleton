<script setup>
import GuestNavbar from "@/Layouts/Partials/GuestNavbar.vue";
import GuestFooter from "@/Layouts/Partials/GuestFooter.vue";
</script>

<template>
  <div class="min-h-screen flex flex-col">
    <GuestNavbar />
    <slot />
    <GuestFooter />
  </div>
</template>
