<template>
    <web-header />

    <main>
        <router-view />
    </main>

    <web-footer />
</template>

<script>
import WebHeader from "./includes/header.vue";
import WebFooter from "./includes/footer.vue";
import { useHead } from "@vueuse/head";

export default {
    setup() {
        useHead({
            title: "Pawtastic",
        });
    },

    components: { WebHeader, WebFooter },
};
</script>
