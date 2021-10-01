<template>
    <div>
        <div class="accordion-item">
            <h2 class="accordion-header" :id="'flush-headingOne' + id">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        :data-bs-target="'#accordian-'+id">
                    <h6>{{ item.name }} - <small>{{ date.format("dddd do MMMM") }}</small></h6>
                </button>
            </h2>
            <div :id="'accordian-'+id" class="accordion-collapse collapse" aria-labelledby="flush-headingOne">
                <div class="accordion-body">
                    <div class="d-flex justify-content">
                        <div>
                            <p>Location: {{ item.location }}</p>
                        </div>
                        <div class="ms-auto">
                            <p>Time: {{ item.time }}</p>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <div v-if="isAttending">
                            <button class="btn btn-sm btn-warning">Attending</button>
                        </div>
                        <div v-else>
                            <div v-if="item.bookings.length > 0">
                                <button class="btn btn-sm btn-warning">Attending</button>
                            </div>
                            <div v-else>
                                <div v-if="!isLoading">
                                    <button @click="attend" class="btn btn-sm btn-success">Attend</button>
                                </div>
                                <div v-else>
                                    <button class="btn btn-primary" type="button" disabled>
                                        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                        Loading...
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    name: "event",
    props: {
        item: Object,
        userId: Number
    },
    data() {
        return {
            id: null,
            isAttending: false,
            isLoading: false
        }
    },
    mounted() {
        this.id = this.item.id
    },
    methods: {
        attend() {
            this.isLoading = true
            return this.$store.dispatch('attend', {
                userId: this.userId,
                eventId: this.id,
                attending: true
            }).then(_ => {
                this.isAttending = true
                this.isLoading = false
                this.$alertify.success("You're Attending! See you on" + this.date.format("dddd do MMMM"));
            })
        }
    },
    computed: {
        date() {
            //This always returns a date in the future
            const dayINeed = this.item.day;
            const today = this.$moment().isoWeekday();
            if (today <= dayINeed) {
                return this.$moment().isoWeekday(dayINeed);
            } else {
                return this.$moment().add(1, 'weeks').isoWeekday(dayINeed);
            }
        }
    }
}
</script>
