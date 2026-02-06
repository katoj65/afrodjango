<script setup>
import HeaderComponent from '@/Components/HeaderComponent.vue';
</script>
<template>
<div class="nk-body bg-white npc-landing">
<div class="nk-app-root">
<div class="nk-main">
<header  id="home">
<header-component/>
</header>
<!-- .header -->
<slot></slot>
</div>
</div>
</div>
</template>
<style scoped>




</style>
