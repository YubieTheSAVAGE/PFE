<template>
    <Link href="/hello">Show page</Link>&nbsp;
    <Link href="/">Index page</Link>
    <div>Time spent: {{ timer }}s</div>
    <slot>default</slot>
</template>

<script setup>
    import { Link } from '@inertiajs/vue3';
    import { ref } from 'vue';

    const timer = ref(0) ;
    setInterval(function(){
        timer.value++
    },1000)
</script>