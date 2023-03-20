<template>
    <Link href="/hello">Show page</Link>&nbsp;
    <Link href="/">Index page</Link>
    <slot></slot>
</template>

<script setup>
    import { Link } from '@inertiajs/vue3';
</script>