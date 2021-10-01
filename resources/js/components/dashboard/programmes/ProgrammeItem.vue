<template>
    <div @click="showItemModal" class="col-md-6 col-lg-4 mb-3">
        <div class="card" style="width: 18rem; height: 10rem">
            <div class="card-body">
                <h5 class="card-text">{{item.name}}</h5>
                <p>Price: {{item.price}}</p>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    name: "programme-item",
    props: {
        item: Object
    },
    methods:{
        showItemModal(){
            this.$modal.show('AddItemModal', {item: this.item})
        }
    }
}
</script>
