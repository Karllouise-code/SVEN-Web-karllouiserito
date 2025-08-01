<template>
    <div class="container custom-container mt-4">
        <h1 class="display-4">About Page</h1>
        <p class="lead">Welcome to the about page!</p>
        <button class="btn btn-primary" type="button">Click Me</button>
    </div>
</template>
<script>
import { useHead } from "@vueuse/head";

export default {
    name: "About",
    setup() {
        useHead({
            title: "About Page",
        });
    },
};
</script>
