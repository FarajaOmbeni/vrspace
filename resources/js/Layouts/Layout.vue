<template>
   <div class="font-header">
      <div>
         <Navbar></Navbar>
      </div>

      <div class="">
         <slot></slot>
      </div>


      <div>
         <Footer></Footer>
      </div>
   </div>
</template>
 
<script setup>
import Navbar from '@/Components/Navbar.vue';
import Footer from '@/Components/Footer.vue';

</script>