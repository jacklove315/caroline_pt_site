<template>
    <div class="col-md-12 col-lg-6">
        <div :class="`${isUserAttending ? 'attending' : 'box'}`">
            <div class="d-flex">
                <h6>{{ individualClass.name }}</h6>
                <div class="ms-auto">
                    {{ individualClass.date }}
                </div>
            </div>
            <p>{{ individualClass.description }}</p>
            <div class="d-flex justify-content-between">
                <div class="time">
                    {{ individualClass.time }}
                </div>
                <div class="time">
                  £{{ individualClass.price }}
                </div>
                <div v-if="isUserAttending">
                    <button class="btn btn-primary">Attending</button>
                </div>
                <div v-else>
                    <button class="btn btn-secondary" @click="showModal()">Book</button>
                </div>
                <div>
                    {{ individualClass.location }}
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    name: "class",
    props: {
        individualClass: Object,
        userId: Number
    },
    methods: {
        //passing properties into our show modal
        showModal() {
            this.$modal.show('bookModal', {
                classId: this.individualClass.id,
                className: this.individualClass.name,
                location: this.individualClass.location,
                time: this.individualClass.time
            })
        }
    },
    computed: {
        isUserAttending() {
            //get array of users attending the event
            let bookingsArray = this.individualClass.bookings

            //make sure there are bookings to proceed with operation
            if (this.individualClass.bookings) {
                //function to through array and check array key against provided value
                function userExists(testuserid) {
                    return bookingsArray.some(function (el) {
                        return el.user_id === testuserid;
                    });
                }

                if (userExists(this.userId)) {
                    return true;
                }

                return false
            }

            return false

        }
    }
}
</script>
<style scoped>
.attending {
    border: solid 2px green;
    background-color: #C1ECCD;
    padding: 4%;
    margin-bottom: 2.5%;
    height: 200.6px;
}


</style>
