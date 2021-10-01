<template>
    <div class="chat-app">
        <conversation-component :contact="SelectedContact" :messages="messages" @new="saveNewMessage"></conversation-component>
        <contact-list-component :contacts="contacts" @selected="startConversationWith"></contact-list-component>
    </div>
</template>
<script>
import ConversationComponent from "./ConversationComponent";
import ContactListComponent from "./ContactListComponent";

export default {
    name: "chat-app-component",
    components: {
        ConversationComponent,
        ContactListComponent
    },
    props: {
        user: {
            type: Object,
            require: true
        }
    },
    data() {
        return {
            SelectedContact: null,
            messages: [],
            contacts: [],
        }
    },
    mounted() {
        Echo.private(`messages.${this.user.id}`)
        .listen('NewMessage', (e) => {
            this.handleIncoming(e.message);
        })


        //get list of contacts to select from
        axios.get('/contacts')
            .then((response) => {
                this.contacts = response.data
            })
    },
    methods: {
        startConversationWith(contact)
        {

            this.SelectedContact = contact

            //get all messages you have with the selected contact
            axios.get(`/conversation/${contact.id}`)
            .then((response) => {
                this.messages = response.data
                this.SelectedContact = contact
            })

        },
        saveNewMessage(messagesData)
        {
            let self = this;
            //we have an array of data returned anyway so no need to loop thorugh and apend to an array
            //just create a new array
            self.messages = messagesData

            //foreach message, push it to the array
            // messagesData.map(function (currentValue, index, array) {
            //
            //     self.messages.push(currentValue)
            // })
            //
            // this.messages.push(messages)
        },
        handleIncoming(message)
        {
            if (this.selectedContact && message.from === this.selectedContact.id) {
                this.saveNewMessage(message)
                return;
            }

            alert(message.text)
        }
    }
}
</script>
<style lang="scss" scoped>
.chat-app {
    display: flex;
}

</style>
