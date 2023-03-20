<template>
    <MainLayout>
        <div>This is Index!</div>
        <p>this is the message: {{ message }}</p>
        <Link href="/hello">Show page</Link>
    </MainLayout>
</template>

<script setup>
    import { Link } from '@inertiajs/vue3';
    import MainLayout from '../../Layouts/MainLayout.vue';
    
    defineProps({
        message: String // type of data expected to be parsed from laravel
    })
</script>