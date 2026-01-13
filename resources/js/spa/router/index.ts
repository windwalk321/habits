import { createRouter, createWebHistory, RouteRecordRaw } from 'vue-router';

const routes: RouteRecordRaw[] = [
    {
        path: '/',
        name: 'home',
        component: () => import('@/spa/pages/Home.vue'),
    },
    {
        path: '/registration',
        name: 'registration',
        component: () => import('@/spa/pages/Registration.vue'),
    },
    {
        path: '/login',
        name: 'login',
        component: () => import('@/spa/pages/Login.vue'),
    },
];

export default createRouter({
    history: createWebHistory('/app'),
    routes,
    scrollBehavior: () => ({ top: 0 }),
});
