<template>
    <div class="row">
        <div class="col-md-6">
            <h2>Example</h2>
            <hr>
            <p>In this example we pass data from Laravel to DataTables. The Laravel data has been passed into this page component through the blade template as a prop.</p>
            <data-table
                    :data="ex1Data">
            </data-table>
        </div>
    </div>
</template>

<script>
    import DataTableComponent from '../components/datatable.vue';

    export default {
        data() {
            return {

            }
        },

        components: {
            dataTable: DataTableComponent
        },

        props: {
            ex1Data: {
                type: [Array],
                default: []
            }
        },

        computed: {

        },

        methods: {

        },

        mounted() {

        }
    }
</script>

<style lang="scss">

</style>