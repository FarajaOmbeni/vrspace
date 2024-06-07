<template>
<Layout>
    <Head title="Experiences"/>
        <div class="bg-cover bg-center h-screen mb-16" style="background-image: url('/images/experiences/experiences.png');">
            <div class="h-screen flex flex-col items-center justify-center text-6xl font-extrabold text-blue">
                <p class="text-pink">VR SPACE</p>
                <p class="text-purple">-</p>
                <p class="text-purple">EXPERIENCE</p>
            </div>
        </div>

        <ExperienceOdd image_link="/images/experiences/htc.png"
            title="HTC VIVE VR"
            image="/images/experiences/user.png"
            player="1 Player/Time"
            time="10 Minutes/Round"
            price="KES 400"
            description="Rich and diversified games, suitable for people of all ages."
            d1="Boxing games"
            d2="Shooting games"
            d3="Horror games"
            d4="Children games"
             />
</Layout>
</template>
 
<script setup>
import Layout from '@/Layouts/Layout.vue';
import ExperienceOdd from '@/Shared/ExperienceOdd.vue';
import ExperienceEven from '@/Shared/ExperienceEven.vue';
</script>