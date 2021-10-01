<template>
    <div>

        <!-- this is the book modal -->
        <booking-modal
            @before-open="beforeOpen()"
            @booked="booking"
        >
        </booking-modal>

        <!-- get/filter class buttons -->
        <div class="container d-flex">
            <div>
                <button :class="`btn btn btn-success ${this.classes.length > 0 ? 'disabled' : ''}`"
                        @click.prevent="getAllClasses()">View all classes
                </button>
            </div>

            <!-- datepicker -->
            <div class="ms-auto">
                <v-date-picker
                    :value="date"
                    :min-date="date"
                    :max-date="maxDate"
                    title-position="left"
                    is-dark
                    color="green"
                    @input="getClassByDate"
                />
            </div>
        </div>

        <div v-if="isLoading" class="text-center">
            <div class="spinner-border" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>

        <div class="container mt-5">
            <h6>
                <hr>
                <div v-if="this.classes.length < 1">
                    There are no classes on this date
                </div>
            </h6>
            <div class="row">
                <!-- our individual class component receiving a class -->
                <class
                    v-for="indclass in classes"
                    :individual-class="indclass"
                    :user-id="userId"
                ></class>
            </div>
        </div>
    </div>
</template>
<script>
import Class from "./Class";
import 'v-calendar'
import BookingModal from "../utils/BookingModal";

export default {
    name: "classes",
    mounted() {
        this.$modal.show('example')
    },
    components: {
        Class,
        BookingModal
    },
    props: {
        userId: Number
    },
    data() {
        return {
            showClasses: false,
            isLoading: false,
            classes: [],
            date: new Date(),
        }
    },
    methods: {
        getAllClasses() {
            this.isLoading = true

            setTimeout(() => {
                axios.get('/dashboard/classes/getAll/')
                    .then((response) => {
                        this.isLoading = false
                        this.classes = response.data
                    })
            }, 500)

            setTimeout(() => {
                window.scrollTo(0, document.body.scrollHeight || document.documentElement.scrollHeight);
            }, 550)

        },
        getClassByDate(date) {

            let self = this
            this.isLoading = true

            setTimeout(() => {
                axios.post('/dashboard/classes/getClassByDate', {
                    date: date
                }).then((response) => {
                    self.classes = response.data
                    self.isLoading = false
                })
            }, 500)

            setTimeout(() => {
                window.scrollTo(0, document.body.scrollHeight || document.documentElement.scrollHeight);
            }, 550)

        },
        /**
         * This gets called via the booking modal emitting an event
         */
        booking(event) {
            axios.post('/dashboard/classes/bookClass', {
                class_id: event
            }).then((response) => {
                this.classes = response.data
                this.$toaster.success('Class successfully booked!')
            })
        }
    },
    computed: {
        maxDate() {
            let datew = new Date
            return datew.setDate(datew.getDate() + 7);
        }
    }
}
</script>
