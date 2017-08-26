<template>
    <div class="row">
        <div class="col-xs-12">
            <h2>Example</h2>
            <hr>
            <p>In this example we pass data from Laravel to DataTables. The Laravel data has been passed into this page component through the blade template as a prop.</p>
            <data-table
                    :data="jsonArray(tblOne)"
                    :classes="tableClasses">
            </data-table>
        </div>
    </div>
</template>

<script>
    import DataTableComponent from '../components/datatable.vue';

    export default {
        data() {
            return {
                tableClasses: ['table', 'table-striped', 'table-bordered']
            }
        },

        components: {
            dataTable: DataTableComponent
        },

        props: {
            tblOne: {
                type: [String]
            }
        },

        computed: {

        },

        methods: {
            jsonArray(json) {
                return JSON.parse(json);
            }
        },

        mounted() {

        }
    }
</script>

<style lang="scss">

</style>