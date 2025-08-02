import { createApp } from "vue";
import { createRouter, createWebHistory, createWebHashHistory } from "vue-router";
import { createHead } from "@vueuse/head";
import App from "./App.vue";
import routes from "./routes.js";
import query from "./queries.js";
import VueSweetalert2 from "vue-sweetalert2";

import "bootstrap/dist/js/bootstrap.bundle.min.js";
import "sweetalert2/dist/sweetalert2.min.css";

const router = createRouter({
    history: createWebHistory(),
    routes,
});

const head = createHead();
const app = createApp(App);

app.config.globalProperties.$query = query;
// app.config.globalProperties.$swal = Swal;

app.use(VueSweetalert2);
app.use(head);
app.use(router);

app.mount("#app");
