<template>
    <Layout>

        <Head title="Experiences" />
        <div class="bg-cover bg-center h-screen mb-16"
            style="background-image: url('/images/experiences/experiences.png');">
            <div class="h-screen flex flex-col items-center justify-center text-6xl font-extrabold text-blue">
                <p class="text-pink">VR SPACE</p>
                <p class="text-purple">-</p>
                <p class="text-purple">EXPERIENCE</p>
            </div>
        </div>

        <ExperienceOdd image_link="/images/experiences/htc.png" title="HTC VIVE VR" image="/images/experiences/user.png"
            player="1 Player/Time" time="10 Minutes/Round" price="KES 400"
            description="Rich and diversified games, suitable for people of all ages." d1="Boxing games"
            d2="Shooting games" d3="Horror games" d4="Children games" />
        <ExperienceEven image_link="/images/experiences/eggvr.png" title="Egg Rollercoaster VR"
            image="/images/experiences/user.png" player="2 Players/Time" time="5 Minutes/Round" price="KES 300"
            description="Best VR rollercoaster experience, suitable for people of all ages." d1="Adventure games"
            d3="Horror games" d4="HEEIIIIGGGHHHTTSS" />

        <ExperienceOdd image_link="/images/experiences/gtr.webp" title="GT Racing SImulator"
            image="/images/experiences/user.png" player="1 Player/Time" time="7 Minutes/Round" price="KES 250"
            description="Race with pros using superfast cars" d1="Reach high speeds of 300km/h"
            d2="Feel the thrill of speed with ZERO risk" d3="Fit for all levels (beginner to pro)"
            d4="Kids LOVE this one" />

        <ExperienceEven image_link="/images/experiences/racing_kart.png" title="Racing Kart VR - Coming Soon!"
            image="/images/experiences/user.png" player="1 Players/Time" time="10 Minutes/Round" price="KES 500"
            description="Race as if you're on the track" d1="Super extra FUN with virtual reality"
            d3="Immersive racing experience" />

        <ExperienceOdd image_link="/images/experiences/magic_ufo.png" title="Magic UFO - Coming Soon!"
            image="/images/experiences/user.png" player="5 Players/Time" time="10 Minutes/Round" price="KES 400"
            description="Rich and diversified games, suitable for all ages" d1="360° rotation for total immersion"
            d2="Horror Games"
            d3="Adventure Games"
            d4="Educational Games"
             />

        <ExperienceEven image_link="/images/experiences/aircraft.png" title="Racing Kart VR - Coming Soon!"
            image="/images/experiences/user.png" player="1 Players/Time" time="10 Minutes/Round" price="KES 500"
            description="Fly your own Jet Fighter!" d1="Very interactive shooting games"
            d2="Immersion at its PEAK"
            d3="Great flying experiecne"
             />
    </Layout>
</template>
 
<script setup>
import Layout from '@/Layouts/Layout.vue';
import ExperienceOdd from '@/Shared/ExperienceOdd.vue';
import ExperienceEven from '@/Shared/ExperienceEven.vue';
</script>