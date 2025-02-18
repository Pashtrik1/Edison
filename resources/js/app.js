import './bootstrap';
import '../css/app.css';

import { createApp } from 'vue';
import App from './app.vue';
import Personalmsg from './components/personalmsg.vue';

const app = createApp({App})
app.component('personal', Personalmsg);
app.mount("#App");