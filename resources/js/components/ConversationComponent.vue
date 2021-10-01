<template>
    <div class="conversation">
        <h1>{{contact ? contact.name : 'Select a contact'}}</h1>
        <message-feed-component :contact="contact" :messages="messages"></message-feed-component>
        <message-composer @send="sendMessage"></message-composer>
    </div>
</template>
<script>
import MessageFeedComponent from "./MessageFeedComponent";
import MessageComposer from "./MessageComposer";

export default {
    name: "conversation-component",
    components: {
        MessageFeedComponent,
        MessageComposer
    },
    props: {
        contact: {
            type: Object,
            default: null
        },
        messages: {
            type: Array,
            default: []
        }
    },
    methods: {
        sendMessage(text){
            if (!this.contact)
            {
              return;
            }

            //post new message and get updated list of messages back
            axios.post('/conversation/send', {
              contact_id: this.contact.id,
              text: text
            }).then((response) => {
              this.$emit('new', response.data)
            })

        }
    }
}
</script>
<style lang="scss" scoped>
.conversation {
    flex: 5;
    display: flex;
    flex-direction: column;
    justify-content: space-between;

    h1 {
        font-size: 20px;
        padding: 10px;
        margin: 0;
        border-bottom: 1px dashed lightgray;
    }

}

</style>
