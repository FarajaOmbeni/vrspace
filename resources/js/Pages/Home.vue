<template>
    <Layout>

        <Head title="Home" />
        <div class="bg-cover bg-center h-screen" style="background-image: url('/images/home/hero_bg.png');">
            <div class="w-1/3 mx-32 pt-32">
                <p class="font-header text-4xl font-bold text-blue text-end">VIRTUAL REALITY SPACE</p>
                <p class="text-xl font-bold text-pink text-end mb-8">More Than Just Games</p>
                <p class="leading-7 text-xl font-bold text-white text-justify">Discover an unparalleled virtual reality
                    gaming
                    experience at VR SPACE. Whether you're a seasoned
                    gamer or a first-time explorer, our immersive VR
                    experiences promise adventure, excitement, and
                    endless fun. Ready to dive in? Click below to start
                    exploring.</p>
                <div class="flex justify-end">
                    <Link href="/experiences"
                        class="text-white rounded-full bg-purple mt-5 py-3 px-10 text-xs font-bold hover:opacity-80">
                    EXPERIENCE VR NOW</Link>
                </div>
            </div>
        </div>

        
    </Layout>
</template>
 
<script setup>
import Layout from '@/Layouts/Layout.vue';
</script>