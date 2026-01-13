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
            width="24"
            height="24"
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
                width="20"
                height="16"
                x="2"
                y="4"
                rx="2"
            ></rect>
            <path
                stroke="currentColor"
                d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"
            ></path>
        </svg>
    </AppIcon>
</template>
