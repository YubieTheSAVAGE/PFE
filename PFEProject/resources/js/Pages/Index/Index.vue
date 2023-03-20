<template>
    <div>This is Index!</div>
    <Link href="/hello">Show page</Link>
    <p>this is the message: {{ message }}</p>
</template>

<script setup>
    import { Link } from '@inertiajs/vue3';
    defineProps({
        message: String // type of data expected to be parsed from laravel
    })
</script>

