import './bootstrap';
import '../css/app.css';

import { createApp } from 'vue';
import App from './app.vue';
import Personalmsg from './components/personalmsg.vue';
import cookiebanner from './components/cookiebanner.vue';
import navbar from './components/navbar.vue';
import homepage from './components/homepage.vue';
/*import { createRouter, createWebHistory } from 'vue-router';
import { routes } from './routes';
import { createWebHistory } from 'vue-router';
*/



const app = createApp({App})
app.component('personal', Personalmsg);
app.component('cbanner', cookiebanner);
app.component('enavbar', navbar);
app.component('home', homepage);
//const router = createRouter({
//    history: createWebHistory(),
//    routes,
//});
app.mount("#App");