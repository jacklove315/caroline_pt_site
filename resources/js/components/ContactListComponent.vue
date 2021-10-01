<template>
    <div class="contact-list">
        <ul>
            <li v-for="(contact, index) in contacts" :key="contact.id" @click="selectContact(index, contact)" :class="{'selected' : selected === index}">
                <div class="contact">
                    <p class="name">{{ contact.name }}</p>
                    <p class="email">{{ contact.email }}</p>
                </div>
            </li>
        </ul>
    </div>
</template>
<script>
export default {
    name: "contact-list-component",
    props: {
        contacts: {
            type: Array,
            default: []
        }
    },
    data(){
        return {
            selected: 0
        }
    },
    methods: {
        selectContact(index, contact)
        {
            this.selected = index

            //emit the selected customer
            this.$emit('selected', contact)

        }
    }
}
</script>
<style lang="scss" scoped>
.contact-list {
    flex: 2;
    max-height: 600px;
    overflow: scroll;
    border-left: 1px solid #a6a6a6;

    ul{
        list-style-type: none;
        padding-left: 0;

        li {
            display: flex;
            padding: 2px ;
            border-bottom: 1px solid #aaaaaa;
            height: 80px;
            position: relative;
            cursor: pointer;

            &.selected {
                background-color: #dfdfdf;
            }


            .contact {
                flex: 3;
                font-size: 10px;
                overflow: hidden;
                display: flex;
                flex-direction: column;
                justify-content: center;

                p {
                    margin: 0;

                    &.name {
                        font-weight: bold;
                    }
                }
            }

        }
    }
}

</style>
