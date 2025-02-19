import './bootstrap';
import '../css/app.css';

import { createApp } from 'vue';
import App from './app.vue';
import Personalmsg from './components/personalmsg.vue';
import cookiebanner from './components/cookiebanner.vue';
import navbar from './components/navbar.vue';

const app = createApp({App})
app.component('personal', Personalmsg);
app.component('cbanner', cookiebanner);
app.component('enavbar', navbar);
app.mount("#App");