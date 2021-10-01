<template>
    <modal name="cancelBooking"
           height="auto"
           @before-open="beforeOpen"
    >
        <div class='modal-container'>
            <h5>Are you sure you want to cancel: {{ className }}</h5>
            <p>class id is: {{ classId }}</p>
            <div class="refund-info">
                <p>If you have already paid for this class and need a refund, contact us here?</p>
            </div>

            <button class="btn btn-sm btn-danger" @click="emitCancelEvent()">Cancel Booking</button>
        </div>
    </modal>
</template>
<script>
export default {
    name: "booking-modal-modal",
    data() {
        return {
            classId: false,
            className: String,
        }
    },
    methods: {
        //this is how we get our props
        beforeOpen(event) {
            this.classId = event.params.classId
            this.className = event.params.className
        },
        emitCancelEvent() {
            this.$emit('cancelled', this.classId)
            this.$modal.hide('cancelBooking')
        }
    }

}
</script>
<style scoped>
.modal-container {
    padding: 10%;
}

.refund-info {
    padding: 2%;
    background-color: lightgrey;
    margin: 3%;
    border-radius: 10px;
}
</style>
