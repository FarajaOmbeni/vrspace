<template>
 <div class="font-body">
    <Navbar></Navbar>
    <slot></slot>
    <Footer></Footer>
 </div>
</template>
 
<script setup>
import Navbar from '@/Components/Navbar.vue';
import Footer from '@/Components/Footer.vue';

</script>