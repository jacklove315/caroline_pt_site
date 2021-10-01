<template>
    <modal name="AddItemModal"
           height="auto"
           @before-open="beforeOpen"
    >
        <div class='modal-container'>
            <h5>{{ item.name }}</h5>
            <small>Description</small>
            <hr>
            <p>{{ item.description }}</p>
            <p>Price: {{ item.price }}</p>

            <!-- loader -->
            <div v-if="isLoading" class="text-center">
                <div class="spinner-border" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>

            <button class="btn btn-success" @click="emitBookingEvent()">Add to cart</button>
        </div>
    </modal>
</template>
<script>
export default {
    name: "booking-modal",
    data() {
        return {
            isLoading: false,
            item: Object,
        }
    },
    methods: {
        //this is how we get our props
        beforeOpen(event) {
            this.item = event.params.item
        },
        emitBookingEvent() {
            this.$emit('added', this.item)
            this.$modal.hide('AddItemModal')
        }
    }

}
</script>
<style scoped>
.modal-container {
    padding: 10%;
}
</style>
