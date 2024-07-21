<script setup>
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <Link class="bg-purple text-black px-3 py-1 font-semibold rounded-2xl hover:bg-pink_opaque hover:text-black">
        <slot />
    </Link>
</template>
