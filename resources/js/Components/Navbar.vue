<template>
    <div class="bg-blue flex justify-between p-2 md:pr-16 items-center fixed w-full">
        <div>
            <Link href="/"><img class="w-24" src="/images/navbar/vrspace_logo.png" alt=""></Link>
        </div>

        <div class="relative md:hidden">
            <img @click="openMenu" class="cursor-pointer mr-4" src="/images/navbar/menu.svg" alt="">

            <div class="hidden bg-blue text-white absolute p-6 top-18 menu_dropdown">
                <ul class="flex flex-col gap-5">
                    <li>
                        <Link href="/"
                            class="border-b-2 border-transparent hover:border-pink transition-all duration-500"
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

        <div class="text-white hidden md:block sm:text-lg md:text-xl">
            <ul class="flex gap-5">
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
// create a function called openMenu that toggles the visibility of the menu
const openMenu = () => {
    document.querySelector('.absolute').classList.toggle('hidden');
}
</script>

<style scoped>
.active {
    border-bottom-color: pink !important;
}
.menu_dropdown{
    right: -10px;
}
</style>