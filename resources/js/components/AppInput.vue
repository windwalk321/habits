<script setup lang="ts">
import { computed, useId, useSlots } from 'vue';
type Size = 'md' | 'lg';

const props = withDefaults(
    defineProps<{
        modelValue?: string | number | null;
        label?: string;
        id?: string;
        type?: string;
        name?: string;
        placeholder?: string;
        disabled?: boolean;
        required?: boolean;
        error?: string | null;
        size?: Size;
    }>(),
    {
        modelValue: '',
        type: 'text',
        size: 'md',
        disabled: false,
        readonly: false,
    },
);

const emit = defineEmits<{
    (e: 'update:modelValue', v: string): void;
    (e: 'blur', ev: FocusEvent): void;
    (e: 'focus', ev: FocusEvent): void;
}>();
const slots = useSlots();

const baseClasses =
    'w-full rounded-md bg-gray-100 text-gray-900 placeholder:text-gray-400 transition focus:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 disabled:opcity-60 disabled:pointer-events-none';
const sizeClasses: Record<Size, string> = {
    md: 'py-1 text-sm',
    lg: 'py-2 text-base',
};
const paddingClasses = computed(() => {
    const hasLeft = !!slots.left;
    const hasRight = !!slots.right;
    let padding = 'px-3';

    if (hasLeft && hasRight) padding = 'px-8';
    if (hasLeft) padding = 'pl-10 pr-3';
    if (hasRight) padding = 'pl-3 pr-10';

    return padding;
});
const classes = computed(() => [
    baseClasses,
    sizeClasses[props.size],
    paddingClasses.value,
]);

const inputId = props.id ?? useId();

function inputHandler(event: Event) {
    const target = event.target as HTMLInputElement;
    emit('update:modelValue', target.value);
}
function blurHandler(event: FocusEvent) {
    emit('blur', event);
}
function focusHandler(event: FocusEvent) {
    emit('focus', event);
}
</script>

<template>
    <div class="w-full text-left">
        <label
            class="block text-xs font-medium text-gray-700 sm:text-sm"
            v-if="label"
            :for="inputId"
        >
            {{ label }}
            <span v-if="required" class="text-gray-400">*</span>
        </label>

        <div class="relative mt-1">
            <div
                v-if="slots.left"
                class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3 text-gray-400"
                aria-hidden="true"
            >
                <slot name="left"></slot>
            </div>
            <input
                @input="inputHandler"
                @blur="blurHandler"
                @focus="focusHandler"
                :id="inputId"
                :value="modelValue ?? ''"
                :class="classes"
                :type="type"
                :placeholder="placeholder"
                :name="name"
                :disabled="disabled"
                :required="required"
            />
            <div
                v-if="slots.right"
                class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3 text-gray-400"
                aria-hidden="true"
            >
                <slot name="right"></slot>
            </div>
        </div>
        <p v-if="error" class="mt-1 text-xs text-red-600">{{ error }}</p>
    </div>
</template>
