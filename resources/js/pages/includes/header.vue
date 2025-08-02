<template>
    <nav :class="['navbar', 'navbar-expand-lg', scrolled ? 'navbar-light bg-white shadow-sm mt-0' : 'navbar-light header-transparent']">
        <div class="container">
            <a class="navbar-brand d-flex mb-0 align-items-center" href="#">
                <span class="paw_container border">
                    <img class="img-fluid paw_logo" src="/public/assets/images/paw_logo.png" alt="Logo" />
                </span>
                <h3 class="ms-3 mb-0" :class="scrolled ? 'text-dark' : 'text-white'">PAWTASTIC</h3>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item me-4">
                        <a class="nav-link" :class="scrolled ? 'text-dark' : 'text-white'" href="#about">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" :class="scrolled ? 'text-dark' : 'text-white'" href="#schedule">Schedule a visit</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</template>
<script>
export default {
    name: "WebHeader",
    data() {
        return {
            scrolled: false,
        };
    },
    mounted() {
        window.addEventListener("scroll", this.handleScroll);
    },
    beforeUnmount() {
        window.removeEventListener("scroll", this.handleScroll);
    },
    methods: {
        handleScroll() {
            this.scrolled = window.scrollY > 10;
        },
    },
};
</script>
