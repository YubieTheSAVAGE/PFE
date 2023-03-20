<template>
    <div>This is Show!</div>
    <Link href="/">Index page</Link>
</template>

<script setup>
    import { Link } from '@inertiajs/vue3';
</script>

<script>
    import MainLayout from '../../Layouts/MainLayout.vue';
    export default{
        layout: MainLayout
    }
</script>