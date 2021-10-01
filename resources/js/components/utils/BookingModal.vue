<template>
    <modal name="bookModal"
           height="auto"
           @before-open="beforeOpen"
    >
        <div class='modal-container'>
            <h5>Booking: {{ modalTitle }}</h5>
            <p>Book now and coming join the fun!</p>
            <p>Location: {{ location }}</p>
            <p>time: {{ time }}</p>
            <p>class id: {{ classId }}</p>

            <!-- loader -->
            <div v-if="isLoading" class="text-center">
                <div class="spinner-border" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>

            <button class="btn btn-success" @click="emitBookingEvent()">Book Now</button>
        </div>
    </modal>
</template>
<script>
export default {
    name: "booking-modal",
    data() {
        return {
            isLoading: false,
            classId: Number,
            modalTitle: String,
            location: String,
            time: String
        }
    },
    methods: {
        //this is how we get our props
        beforeOpen(event) {
            this.classId = event.params.classId
            this.modalTitle = event.params.className
            this.location = event.params.location
            this.time = event.params.time
        },
        emitBookingEvent() {
            this.$emit('booked', this.classId)
            this.$modal.hide('bookModal')
        }
    }

}
</script>
<style scoped>
.modal-container {
    padding: 10%;
}
</style>
