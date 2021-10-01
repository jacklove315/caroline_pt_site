<template>
    <div>
        <div v-for="event in events" :key="event.id">
            <event :item="event" :user-id="userId"></event>
        </div>
    </div>
</template>
<script>
import Event from "./Event";

export default {
    name: "events",
    components: {
        Event
    },
    props: {
        events: Array,
        userId: Number
    }
}
</script>
