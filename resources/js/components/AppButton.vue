<script setup lang="ts">
import { computed } from 'vue';

type Variant = 'default' | 'secondary' | 'outline' | 'ghost' | 'danger';
type Size = 'sm' | 'md' | 'lg';

const props = withDefaults(
    defineProps<{
        variant?: Variant;
        size?: Size;
        type?: 'button' | 'submit' | 'reset';
        href?: string;
        fullWidth?: boolean;
        loading?: boolean;
        disabled?: boolean;
    }>(),
    {
        variant: 'default',
        size: 'md',
        type: 'button',
        fullWidth: false,
        loading: false,
        disabled: false,
    },
);

const variantClasses: Record<Variant, string> = {
    default: 'bg-gray-900 text-white hover:bg-gray-800',
    secondary: 'bg-gray-200 text-gray-800 hover:bg-gray-100',
    outline: 'border border-gray-100 text-gray-800 hover:bg-gray-200',
    ghost: 'text-gray-800 hover:bg-gray-200',
    danger: 'bg-red-600 text-white hover:bg-red-500',
};
const sizeClasses: Record<Size, string> = {
    sm: 'px-3 py-1 text-sm',
    md: 'px-4 py-2 text-sm',
    lg: 'px-5 py-3 text-sm',
};
const baseClasses =
    'inline-flex items-center justify-center gap-2 rounded-md text-sm sm:text-base font-medium transition-colors focus-visible:outline-none focus-visible:ring-2 disabled:opacity-60 disabled:pointer-events-none select-none';

const isDisabled = computed(() => props.disabled || props.loading);
const componentTag = computed(() => (props.href ? 'a' : 'button'));

const classes = computed(() => [
    baseClasses,
    sizeClasses[props.size],
    variantClasses[props.variant],
    props.fullWidth ? 'w-full' : '',
]);
</script>

<template>
    <component
        :is="componentTag"
        :href="href"
        :type="!href ? props.type : undefined"
        :class="classes"
        :disabled="href ? isDisabled : undefined"
    >
        <slot name="left" />
        <div
            v-if="loading"
            class="size-4 animate-spin rounded-full border-3 border-gray-200 border-t-indigo-600"
        ></div>
        <slot></slot>
        <slot name="right"></slot>
    </component>
</template>
