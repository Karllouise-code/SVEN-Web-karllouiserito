import { createApp } from 'vue'
import { createRouter, createWebHistory } from 'vue-router'
import { createHead } from '@vueuse/head';
import App from './App.vue'
import routes from './routes.js'

import 'bootstrap/dist/js/bootstrap.bundle.min.js';

const router = createRouter({
    history: createWebHistory(),
    routes,
})

const head = createHead();
const app = createApp(App)

app.use(head)
app.use(router)

app.mount('#app')