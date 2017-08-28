<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2>Data From View</h2>
                <hr>
                <p>In this example we pass data from Laravel to DataTables in the view. The Laravel data has been passed into this page component through the blade template as a prop.</p>
                <data-table
                        :data="jsonArray(tblOne)"
                        :classes="tableClasses">
                </data-table>
            </div>

            <div class="col-md-4">
                <div class="well">
                    <code v-highlighter:javascript="ex1Markup"></code>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <h2>Data From Ajax</h2>
                <hr>
                <p>Here we are getting ajax sourced data and changing a few of the default settings</p>
            </div>
        </div>
    </div>
</template>

<script>
    import DataTableComponent from '../components/datatable.vue';

    export default {
        data() {
            return {
                tableClasses: ['table', 'table-striped', 'table-bordered'],
                ex1Markup: "<div class=\"col-md-8\">\n" +
                "                <h2>Data From View</h2>\n" +
                "                <hr>\n" +
                "                <p>In this example we pass data from Laravel to DataTables in the view. The Laravel data has been passed into this page component through the blade template as a prop.</p>\n" +
                "                <data-table\n" +
                "                        :data=\"jsonArray(tblOne)\"\n" +
                "                        :classes=\"tableClasses\">\n" +
                "                </data-table>\n" +
                "            </div>"
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