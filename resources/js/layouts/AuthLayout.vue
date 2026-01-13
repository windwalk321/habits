<!-- <script setup lang="ts">
defineProps<{
    title?: string;
    description?: string;
}>();
</script> -->

<template>
    <div
        class="flex min-h-screen flex-col items-center justify-center bg-gradient-to-b from-indigo-50 to-white px-4 py-8 sm:px-6 sm:py-12"
    >
        <slot />
    </div>
</template>
