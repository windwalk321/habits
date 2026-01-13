<script setup lang="ts">
import AppButton from '@/components/AppButton.vue';
import AppInput from '@/components/AppInput.vue';
import AppIconGithub from '@/components/icons/AppIconGithub.vue';
import AppIconGoogle from '@/components/icons/AppIconGoogle.vue';
import AppIconLock from '@/components/icons/AppIconLock.vue';
import AppIconMail from '@/components/icons/AppIconMail.vue';
import AuthLayout from '@/layouts/AuthLayout.vue';
import axios, { AxiosError } from 'axios';
import { reactive, ref } from 'vue';
import { RouterLink, useRouter } from 'vue-router';

type LoginPayload = {
    email: string;
    password: string;
};

type User = {
    id: number;
    email: string;
};

type ApiValidationError = {
    message: string;
    errors: Record<string, string[]>;
};

const api = axios.create({
    baseURL: import.meta.env.BASE_URL,
    withCredentials: true,
    withXSRFToken: true,
    headers: {
        Accept: 'application/json',
        'X-Requested-With': 'XMLHttpRequest',
    },
});
const router = useRouter();

const formData = reactive<LoginPayload>({
    email: '',
    password: '',
});

const fieldErrors = reactive<
    Partial<Record<keyof LoginPayload, string | null>>
>({});

const formError = ref<string | null>(null);

function validateEmail(value: string): string | null {
    if (!value.trim()) return 'Email is required';
    const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    if (!emailRegex.test(value)) return 'Invalid email format';

    return null;
}

function validatePassword(value: string): string | null {
    if (!value.trim()) return 'Password is required';
    if (value.length < 8) return 'Password must be at least 8 characters long';

    return null;
}

function validateField(field: keyof LoginPayload, value: string) {
    let message: string | null = null;

    if (field === 'email') message = validateEmail(value);
    if (field === 'password') message = validatePassword(value);

    fieldErrors[field] = message;

    return message;
}

async function login(payload: LoginPayload) {
    try {
        await api.get('/sanctum/csrf-cookie');
        await api.post('/api/auth/login', payload);

        const user = await api.get<User>('/api/auth/user');
        return user.data;
    } catch (error) {
        const err = error as AxiosError<ApiValidationError>;
        throw err;
    }
}

async function handleSubmit() {
    const emailValidation = validateField('email', formData.email);
    const passwordValidation = validateField('password', formData.password);

    if (emailValidation || passwordValidation) return;

    try {
        await login(formData);
        router.push('/');
    } catch (error) {
        const err = error as AxiosError<ApiValidationError>;

        // server-side validation error handling
        if (err.response?.status === 422) {
            const error = err.response.data;
            Object.keys(error.errors).forEach((key) => {
                const field = key as keyof LoginPayload;
                fieldErrors[field] = error.errors[key][0];
            });

            return;
        }

        formError.value = err.response?.data.message ?? 'Login failed.';
    }
}
</script>

<template>
    <AuthLayout>
        <div
            class="w-full max-w-md rounded-2xl border border-gray-100 bg-white p-6 text-center shadow-xl sm:p-8"
        >
            <h2>Welcome back</h2>
            <p class="mt-2 text-sm text-gray-600 sm:text-base">
                Sign in to continue tracking your habits
            </p>
            <div class="mt-6 sm:mt-8">
                <AppButton :variant="'outline'" full-width>
                    <template #left>
                        <appIconGoogle />
                    </template>
                    Continue with Google
                </AppButton>
                <AppButton :variant="'outline'" full-width class="mt-2">
                    <template #left>
                        <appIconGithub />
                    </template>
                    Continue with GitHub
                </AppButton>
            </div>
            <div
                class="mt-2 flex items-center text-xs text-gray-500 before:block before:h-px before:flex-1 before:bg-gray-200 before:content-[''] after:block after:h-px after:flex-1 after:bg-gray-200 after:content-[''] sm:text-sm"
            >
                <span class="mx-2">Or sign in with email</span>
            </div>
            <form class="mt-3" @submit.prevent="handleSubmit">
                <AppInput
                    v-model="formData.email"
                    autocomplete="'email'"
                    :label="'Email'"
                    :placeholder="'you@example.com'"
                    :error="fieldErrors['email']"
                >
                    <template #left>
                        <AppIconMail />
                    </template>
                </AppInput>
                <AppInput
                    v-model="formData.password"
                    class="mt-2"
                    :label="'Password'"
                    :placeholder="'••••••••'"
                    :error="fieldErrors['password']"
                    :type="'password'"
                >
                    <template #left>
                        <AppIconLock />
                    </template>
                </AppInput>
                <AppButton class="mt-4" :type="'submit'" full-width
                    >Enter account</AppButton
                >
                <p class="mt-2 text-center text-sm text-gray-600">
                    Already have an account?
                    <RouterLink
                        to="/registration"
                        class="text-indigo-600 hover:text-indigo-700"
                        >Sign up</RouterLink
                    >
                </p>
            </form>
        </div>
    </AuthLayout>
</template>
