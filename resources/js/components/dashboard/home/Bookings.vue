<template>
    <div>
        <cancel-booking-modal
            @cancelled="cancelBooking"
        >
        </cancel-booking-modal>

        <div v-if="bookings.length > 0">
            <div v-for="booking in getUserBookings">
                <booking-item
                    :booking="booking"
                >
                </booking-item>
            </div>
        </div>
        <div v-else>
            You have not booked any classes this week
        </div>
    </div>
</template>
<script>
import BookingItem from "./BookingItem";
import CancelBookingModal from "../../utils/CancelBookingModal";

export default {
    name: "bookings",
    components: {
        BookingItem,
        CancelBookingModal
    },
    props: {
        bookings: Array
    },
    mounted() {
        //initiate store
        this.$store.dispatch('retrieveBookingsAndStore', this.bookings)
    },
    computed: {
        //get user bookings
        getUserBookings() {
            return this.$store.getters.getUserBookings;
        }
    },
    methods: {
        cancelBooking(classId){
            this.$store.dispatch('cancelEvent', classId)
        }
    }
}
</script>
