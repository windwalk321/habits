<script setup lang="ts">
import { computed } from 'vue';

const props = withDefaults(
    defineProps<{
        size?: 'sm' | 'md' | 'lg' | number;
        title?: string;
        decorative: boolean;
        class?: string;
    }>(),
    { size: 'md', decorative: true },
);

const sizeClass = computed(() => {
    if (typeof props.size === 'number') return '';
    const classes = {
        sm: 'size-3 sm:size-4',
        md: 'size-4 sm:size-5',
        lg: 'size-5 sm:size-6',
    };

    return classes[props.size];
});

const sizeStyle = computed(() => {
    if (typeof props.size !== 'number') return {};
    const px = `${props.size}px`;

    return { width: px, height: px };
});

const decorativeProps = computed(() => {
    if (props.decorative) return { 'aria-hidden': true };
    return { role: 'img', 'aria-label': props.title || 'icon' };
});
</script>

<template>
    <span class="inline-flex" :class="class">
        <slot
            :size-class="sizeClass"
            :size-style="sizeStyle"
            :is-decorative="decorativeProps"
        ></slot>
    </span>
</template>
