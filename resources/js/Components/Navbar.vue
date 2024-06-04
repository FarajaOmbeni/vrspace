<template>
    <div class="bg-blue flex justify-between p-2 pr-16 items-center">
        <div><img class="w-24" src="/images/navbar/vrspace_logo.png" alt=""></div>
        <div class="text-white">
            <ul class="flex gap-5 text-xl">
                <li>
                    <Link href="/" class="border-b-2 border-transparent hover:border-pink transition-all duration-500"
                        v-bind:class="{ 'active': $page.url.startsWith('/') }">
                    HOME</Link>
                </li>
                <li>
                    <Link href="/experiences"
                        class="border-b-2 border-transparent hover:border-pink transition-all duration-500"
                        v-bind:class="{ 'active': $page.url.startsWith('/experiences') }">
                    EXPERIENCES</Link>
                </li>
                <li>
                    <Link href="/about"
                        class="border-b-2 border-transparent hover:border-pink transition-all duration-500"
                        v-bind:class="{ 'active': $page.url.startsWith('/about') }">
                    ABOUT US
                    </Link>
                </li>
                <li>
                    <Link href="/contact"
                        class="border-b-2 border-transparent hover:border-pink transition-all duration-500"
                        v-bind:class="{ 'active': $page.url.startsWith('/contact') }">CONTACT
                    US</Link>
                </li>
            </ul>
        </div>
    </div>
</template>

<script setup>
</script>

<style scoped>
.active {
    border-bottom-color: pink !important;
}
</style>