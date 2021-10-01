<script>
import TotalFooter from "./TotalFooter";
import ProgrammeItem from "./ProgrammeItem";
import AddItemModal from "../../utils/AddItemModal";


export default {
    name: "programmes-section",
    components: {
        TotalFooter,
        ProgrammeItem,
        AddItemModal
    },
    computed: {
        orderCount(){
            return this.$store.getters['totalOrderItems']
        },
        orderTotal(){
            return this.$store.getters['orderTotal']

        }
    },
    methods: {
        itemAdded(e){
            console.log(e)
            //add item to store
            this.$store.dispatch('addItem', e)
        }
    }
}
</script>
