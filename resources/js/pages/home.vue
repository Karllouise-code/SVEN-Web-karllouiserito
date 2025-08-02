<template>
    <div class="pet_booking homepage">
        <section class="hero-section">
            <div class="hero-bg"></div>
            <div class="hero-content container">
                <div class="hero-text-container">
                    <h1 class="display-4">
                        We care for your furry little loved ones
                        <br class="d-none d-md-block" />
                        while
                    </h1>
                    <button @click="onRedirectForm" class="btn btn-lg btn-primary primary mt-5" type="button">Schedule a visit</button>
                </div>
            </div>
        </section>

        <section class="about" id="about">
            <div class="container mt-4">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h1 class="display-4">Expert care for your furry, feathery, or scaley friend</h1>
                        <p class="lead">We know how stressful it is to leave your pets at home alone. We're a team of experienced animal caregivers, well connected to local veterinarians. Trust us to love them like our own, and to keep them safe and happy till you're home.</p>
                        <button @click="onRedirectForm" class="btn btn-lg btn-primary secondary" type="button" style="margin-top: 2rem">Schedule a visit</button>
                    </div>
                    <div class="col-md-6">
                        <div class="row g-3 ms-md-4 ms-0 mt-md-0 mt-4">
                            <div class="col-md-6">
                                <div class="portrait-img">
                                    <img src="/public/assets/images/portrait_cat.jpg" alt="cat" class="img-fluid rounded w-100" />
                                    <div class="portrait-overlay"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="portrait-img">
                                    <img src="/public/assets/images/portrait_bird.jpg" alt="bird" class="img-fluid rounded w-100" />
                                    <div class="portrait-overlay"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="portrait-img">
                                    <img src="/public/assets/images/portrait_dog.jpg" alt="dog" class="img-fluid rounded w-100" />
                                    <div class="portrait-overlay"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="portrait-img">
                                    <img src="/public/assets/images/portrait_hamster.jpg" alt="hamster" class="img-fluid rounded w-100" />
                                    <div class="portrait-overlay"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="contact" id="schedule">
            <div class="row no-gutters align-items-stretch">
                <div class="col-lg-5 contact-left flex-column">
                    <div class="mt-5 inner-container">
                        <a class="navbar-brand d-flex mb-0 align-items-center" href="#">
                            <span class="paw_container border">
                                <img class="img-fluid paw_logo" src="/public/assets/images/paw_logo.png" alt="Logo" />
                            </span>
                            <h3 class="ms-3 mb-0" :class="scrolled ? 'text-dark' : 'text-white'">PAWTASTIC</h3>
                        </a>
                        <h1 class="display-4 text-white mt-4">All services include:</h1>

                        <!-- <div></div> -->
                        <ul class="list-unstyled mt-4 ms-4">
                            <li class="mb-5"><i class="bi bi-check-circle-fill text-primary"></i> A photo update for you along</li>
                            <li class="mb-5"><i class="bi bi-check-circle-fill text-primary"></i> Notification of sitter arrival</li>
                            <li class="mb-5"><i class="bi bi-check-circle-fill text-primary"></i> Treats for your pet, with your</li>
                        </ul>
                    </div>

                    <div class="puppy-img-gradient">
                        <img src="/public/assets/images/puppy_run.png" alt="" />
                    </div>
                </div>
                <div class="col-lg-7 contact-right">
                    <div class="m-5 inner-container">
                        <h1 class="display-5">We'll take your dog for a walk. Just tell us when!</h1>

                        <form @submit.prevent="onSubmit" class="mt-5 frequency-form">
                            <div class="row">
                                <div class="col-xxl-6 mb-3">
                                    <label class="form-label d-block">Frequency</label>

                                    <div class="frequency-wrapper">
                                        <div class="btn-group" role="group" aria-label="Frequency">
                                            <input v-model="frequency" value="recurring" type="radio" class="btn-check" name="frequency" id="recurring" autocomplete="off" checked />
                                            <label class="btn frequency-btn" for="recurring">Recurring</label>

                                            <input v-model="frequency" value="one_time" type="radio" class="btn-check" name="frequency" id="one-time" autocomplete="off" />
                                            <label class="btn frequency-btn" for="one-time">One Time</label>

                                            <span class="text-danger">{{ frequency_error }}</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start date -->
                                <div class="col-xxl-6 mb-3">
                                    <label class="form-label">Start Date</label>
                                    <input type="text" ref="dateInput" v-model="start_date" placeholder="MM/DD/YYYY" class="form-control" style="padding: 0.8rem" />
                                    <span class="text-danger">{{ start_date_error }}</span>
                                </div>

                                <!-- days -->
                                <div class="col-md-12 mb-3">
                                    <label class="form-label">Days <span class="fw-light">&nbsp; Select all that apply</span> </label>

                                    <div class="w-100">
                                        <div class="btn-group days-group" role="group" aria-label="Select days">
                                            <input v-model="days" value="Monday" type="checkbox" class="btn-check" id="mon" autocomplete="off" />
                                            <label class="btn day-btn" for="mon">Mon</label>

                                            <input v-model="days" value="Tuesday" type="checkbox" class="btn-check" id="tue" autocomplete="off" />
                                            <label class="btn day-btn" for="tue">Tue</label>

                                            <input v-model="days" value="Wednesday" type="checkbox" class="btn-check" id="wed" autocomplete="off" />
                                            <label class="btn day-btn" for="wed">Wed</label>

                                            <input v-model="days" value="Thursday" type="checkbox" class="btn-check" id="thu" autocomplete="off" />
                                            <label class="btn day-btn" for="thu">Thu</label>

                                            <input v-model="days" value="Friday" type="checkbox" class="btn-check" id="fri" autocomplete="off" />
                                            <label class="btn day-btn" for="fri">Fri</label>

                                            <input v-model="days" value="Saturday" type="checkbox" class="btn-check" id="sat" autocomplete="off" />
                                            <label class="btn day-btn" for="sat">Sat</label>

                                            <input v-model="days" value="Sunday" type="checkbox" class="btn-check" id="sun" autocomplete="off" />
                                            <label class="btn day-btn" for="sun">Sun</label>
                                        </div>
                                    </div>
                                    <span class="text-danger">{{ days_error }}</span>
                                </div>

                                <!-- times -->
                                <div class="col-md-12 mb-3">
                                    <label class="form-label">Times <span class="fw-light">&nbsp; Select all that apply</span> </label>

                                    <div class="w-100">
                                        <div class="btn-group times-group" role="group" aria-label="Select time">
                                            <input v-model="times" value="Morning" type="checkbox" class="btn-check" id="morning" autocomplete="off" />
                                            <label class="btn times-btn" for="morning">Morning</label>

                                            <input v-model="times" value="Afternoon" type="checkbox" class="btn-check" id="afternoon" autocomplete="off" />
                                            <label class="btn times-btn" for="afternoon">Afternoon</label>

                                            <input v-model="times" value="Evening" type="checkbox" class="btn-check" id="evening" autocomplete="off" />
                                            <label class="btn times-btn" for="evening">Evening</label>
                                        </div>
                                    </div>
                                    <span class="text-danger">{{ times_error }}</span>
                                </div>

                                <!-- notes -->
                                <div class="col-md-12 mb-4">
                                    <label class="form-label"> Notes for your sitter </label>

                                    <textarea v-model="notes" class="form-control" rows="4" placeholder="Route preferences, leash location, treats given, etc."></textarea>
                                </div>

                                <!-- button -->
                                <div class="col-md-12 text-center">
                                    <div>
                                        <button class="btn btn-lg btn-secondary secondary" type="submit" :disabled="is_calling_api">
                                            <span v-if="is_calling_api" class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span>
                                            Schedule Service
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>
<script>
import { useHead } from "@vueuse/head";
import flatpickr from "flatpickr";
import "flatpickr/dist/flatpickr.min.css";

export default {
    name: "Home",

    setup() {
        useHead({
            title: "Home Page | Pawtastic",
        });
    },

    data() {
        return {
            scrolled: false,
            frequency: "recurring",
            start_date: "",
            days: [],
            times: [],
            notes: "",

            is_calling_api: false,
            global_error_message: "Something went wrong. Please try again later.",

            // errors
            frequency_error: "",
            start_date_error: "",
            days_error: "",
            times_error: "",
        };
    },

    mounted() {
        flatpickr(this.$refs.dateInput, {
            dateFormat: "m/d/Y", // MM/DD/YYYY
            defaultDate: this.startDate || null,
            minDate: "today",
        });
    },

    methods: {
        onSubmit() {
            this.is_calling_api = true;
            this.onClearErrors();

            this.$query("action_front", {
                front: {
                    frequency: this.frequency,
                    start_date: this.start_date,
                    days: this.days,
                    times: this.times,
                    notes: this.notes,
                    action_type: "schedule_appointment",
                },
            })
                .then((res) => {
                    this.is_calling_api = false;
                    if (res.data.errors) {
                        let errors = Object.values(res.data.errors[0].extensions.validation).flat();
                        let errors_keys = Object.keys(res.data.errors[0].extensions.validation).flat();

                        this.frequency_error = errors_keys.some((q) => q == "front.frequency") ? errors[errors_keys.indexOf("front.frequency")] : "";
                        this.start_date_error = errors_keys.some((q) => q == "front.start_date") ? errors[errors_keys.indexOf("front.start_date")] : "";
                        this.days_error = errors_keys.some((q) => q == "front.days") ? errors[errors_keys.indexOf("front.days")] : "";
                        this.times_error = errors_keys.some((q) => q == "front.times") ? errors[errors_keys.indexOf("front.times")] : "";
                    } else {
                        let response = res.data.data.front;
                        if (!response.error) {
                            this.$swal("Success!", response.message, "success");
                        } else {
                            this.$swal("Error!", response.message, "error");
                        }

                        this.onClearFields();
                        this.onClearErrors();
                    }
                })
                .catch((err) => {
                    this.is_calling_api = false;
                    this.$swal("Error!", this.global_error_message, "error");
                });
        },

        onClearFields() {
            this.frequency = "recurring";
            this.start_date = "";
            this.days = [];
            this.times = [];
            this.notes = "";
            this.$refs.dateInput._flatpickr.clear();
        },

        onClearErrors() {
            this.frequency_error = "";
            this.start_date_error = "";
            this.days_error = "";
            this.times_error = "";
        },

        onRedirectForm() {
            window.location.hash = "";

            window.location.hash = "#schedule";
        },
    },
};
</script>

<style></style>
