<template>
    <div class="flex w-10/12 gap-32 justify-center mx-auto mb-32">
        <div class="w-1/2">
            <p class="text-4xl text-blue font-header font-bold mb-6">{{ title }}</p>
            <div class="border-b-4 border-b-blue my-20 w-1/2"></div>
            <p class="mb-14 text-2xl">{{ description }}</p>

            <a class="bg-purple p-4 w-44 text-white font-bold hover:opacity-80" target="_blank" :href="link">{{ button }}
            </a>
        </div>

        <div class=""><img class="w-10/12" :src="image_link" alt=""></div>
    </div>
</template>

<script setup>
defineProps({
    title: String,
    description: String,
    link: String,
    image_link: String,
    button: String,
});
</script>