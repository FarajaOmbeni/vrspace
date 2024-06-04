<template>
    <div>
        <div>
            <img :src="image_link" alt="Image">
        </div>
        <div>
            <h1 class="border-b-2 border-b-blue">{{ title }}</h1>
            <p>{{ description }}</p>
            <Link>{{ link }}</Link>
        </div>
        
    </div>
</template>
 
<script setup>
defineProps({
    title: String,
    description: String,
    link: String,
    image_link: String
});
</script>