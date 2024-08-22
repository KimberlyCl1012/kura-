import './bootstrap';
import '../css/app.css';
const images = import.meta.glob([
	'../img/**'
	// '../fonts/**',
]);
import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy';

import Aura from '@primevue/themes/aura';
import PrimeVue from 'primevue/config';
import ToastService from "primevue/toastservice";
import 'primeicons/primeicons.css';

const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

createInertiaApp({
	title: (title) => `${title} - ${appName}`,
	resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
	setup({ el, App, props, plugin }) {
		return createApp({ render: () => h(App, props) })
			.use(plugin)
			.use(PrimeVue, {
				theme: {
					preset: Aura,
					options: {
						prefix: 'p',
						darkModeSelector: 'light',
						cssLayer: false
					}
				},
				options: {
					prefix: 'p',
					darkModeSelector: 'dark',
					cssLayer: false
				}	
			})
			.use(ToastService)
			.use(ZiggyVue)
			.mount(el);
	},
	progress: {
		color: '#4B5563'
	}
});



