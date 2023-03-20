<template>
    <div>This is Index!</div>
    <p>this is the message: {{ message }}</p>
    <Link href="/hello">Show page</Link>
</template>

<script setup>
    import { Link } from '@inertiajs/vue3';
    defineProps({
        message: String // type of data expected to be parsed from laravel
    })
</script>