import './bootstrap';
import '../css/app.css';
import '../dashlite/assets/css/dashlite.css';
import '../dashlite/assets/css/dashlite.min.css';
import '../SEOcom/css/style.css';
import '../SEOcom/css/bootstrap.min.css';


import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy';


const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

createInertiaApp({
title: (title) => `${title} - ${appName}`,
resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
setup({ el, App, props, plugin }) {
return createApp({ render: () => h(App, props) })
.use(plugin)
.use(ZiggyVue)
.mount(el);
},
progress: {
color: '#4B5563',
},
});
