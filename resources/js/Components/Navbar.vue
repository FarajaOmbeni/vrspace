<template>
    <div class="z-1000 bg-blue flex justify-between p-2 md:pr-16 items-center fixed w-full">
        <div>
            <Link href="/"><img class="w-24" src="/images/navbar/vrspace_logo.png" alt=""></Link>
        </div>

        <div class="relative md:hidden">
            <img @click="openMenu" class="cursor-pointer mr-4" src="/images/navbar/menu.svg" alt="">

            <div class="hidden bg-blue text-white absolute p-6 top-18 menu_dropdown">
                <ul class="flex flex-col gap-5">
                    <li>
                        <NavLink href="/"
                            v-bind:class="{ 'active': $page.url === '/' }">
                        HOME</NavLink>
                    </li>
                    <li>
                        <NavLink href="/experiences"
                            v-bind:class="{ 'active': $page.url === '/experiences' }">
                        EXPERIENCES</NavLink>
                    </li>
                    <li>
                        <NavLink href="/about"
                            v-bind:class="{ 'active': $page.url ==='/about' }">
                        ABOUT US
                        </NavLink>
                    </li>
                    <li>
                        <NavLink href="/contact"
                            v-bind:class="{ 'active': $page.url ==='/contact' }">CONTACT
                        US</NavLink>
                    </li>
                </ul>
            </div>
        </div>

        <div class="text-white hidden md:block sm:text-lg md:text-xl">
            <ul class="flex gap-5">
                <li>
                    <NavLink href="/"                     
                    v-bind:class="{ 'active': $page.url === '/' }">
                    HOME</NavLink>
                </li>
                <li>
                    <NavLink href="/experiences"
                    v-bind:class="{ 'active': $page.url === '/experiences' }">
                    EXPERIENCES</NavLink>
                </li>
                <li>
                    <NavLink href="/about"
                    v-bind:class="{ 'active': $page.url === '/about' }">
                    ABOUT US
                    </NavLink>
                </li>
                <li>
                    <NavLink href="/contact"
                    v-bind:class="{ 'active': $page.url === '/contact' }">CONTACT
                    US</NavLink>
                </li>
            </ul>
        </div>
    </div>
</template>

<script setup>
import NavLink from '@/Components/NavLink.vue';
// create a function called openMenu that toggles the visibility of the menu
const openMenu = () => {
    document.querySelector('.absolute').classList.toggle('hidden');
}
</script>

<style scoped>
.active {
    background-color: #F180C5 !important;
    color: #000133;
}

.menu_dropdown {
    right: -10px;
}
</style>