import '../css/app.css';

import App from '@/spa/App.vue';
import router from '@/spa/router';
import { createApp } from 'vue';

// const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

// createInertiaApp({
//     title: (title) => (title ? `${title} - ${appName}` : appName),
//     resolve: (name) =>
//         resolvePageComponent(
//             `./pages/${name}.vue`,
//             import.meta.glob<DefineComponent>('./pages/**/*.vue'),
//         ),
//     setup({ el, App, props, plugin }) {
//         createApp({ render: () => h(App, props) })
//             .use(plugin)
//             .mount(el);
//     },
//     progress: {
//         color: '#4B5563',
//     },
// });

// // This will set light / dark mode on page load...
// initializeTheme();

createApp(App).use(router).mount('#app');
