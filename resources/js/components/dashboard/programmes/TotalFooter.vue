<template>
    <footer class="footer mt-auto py-3 bg-light " style="position:fixed;
   bottom:0;
   width:100%;
   height:60px;   /* Height of the footer */
   background:#6cf;
z-index: 1">
        <div class="d-flex justify-content-center">
            Order Total: {{ totalOrderItems }}
        </div>
    </footer>
</template>
<script>
export default {
    name: "total-footer",
    computed: {
        totalOrderItems() {
            return this.$store.getters['totalOrderItems']
        }
    }
}
</script>
