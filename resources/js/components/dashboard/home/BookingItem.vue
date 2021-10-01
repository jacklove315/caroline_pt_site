<template>
    <div class="booking-item">
        <div class="d-flex justify-content-between">
            <div>
                <h6>{{this.booking.booking_class.name}}</h6>
            </div>
            <div>
                <button class="btn btn-sm btn-warning" @click="showModal()">Cancel</button>
            </div>
        </div>

        <div class="d-flex justify-content-between">
            <div>
                1
            </div>
            <div>
                2
            </div>
            <div>
                3
            </div>
        </div>
    </div>
</template>
<script>
export default {
    name: "booking-item",
    props: {
        booking: Object
    },
    methods: {
        //passing properties into our show modal
        showModal() {
            this.$modal.show('cancelBooking', {
                classId: this.booking.booking_class.id,
                className: this.booking.booking_class.name,
            })
        }
    }
}
</script>
<style scoped>
.booking-item{
    background-color: lightcoral;
    padding: 3%;
    margin-bottom: 2%;
    border-radius: 10px;
}
</style>
