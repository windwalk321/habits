<script setup lang="ts">
import AppIcon from './AppIcon.vue';

defineProps<{
    size?: 'sm' | 'md' | 'lg' | number;
    title?: string;
    decorative?: boolean;
    class?: string;
}>();
</script>
<template>
    <AppIcon
        :size="size"
        :title="title"
        :decorative="decorative"
        :class="class"
        v-slot="{ sizeClass, sizeStyle, decorativeProps }"
    >
        <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
            fill="none"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
            :class="sizeClass"
            :style="sizeStyle"
            v-bind="decorativeProps"
        >
            <rect
                stroke="currentColor"
                width="18"
                height="11"
                x="3"
                y="11"
                rx="2"
            ></rect>
            <path
                stroke="currentColor"
                d="M7 11V7a5 5 0 0 1 10 0v4m-5 4v2"
            ></path>
        </svg>
    </AppIcon>
</template>
