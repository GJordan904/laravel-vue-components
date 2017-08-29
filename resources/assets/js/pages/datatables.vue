<template>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h2>Data From View</h2>
                <hr>
                <p>In this example we pass data from Laravel to DataTables in the view. The Laravel data has been passed into this page component through the blade template as a prop.</p>
                <data-table
                        :data="jsonArray(tblOne)"
                        :classes="tableClasses">
                </data-table>
            </div>

            <div class="col-md-8">
                <tabs>
                    <tab title="Blade Template" name="blade" active="true">
                        <pre highlighter>
                            <code class="language-markup">
&lt;data-tables tbl-one="$users">&lt;/data-tables>
                            </code>
                        </pre>
                    </tab>
                    <tab title="Page Component" name="component">
                        <p>Test 2</p>
                    </tab>
                </tabs>
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
    import Tabs from '../components/tabs.vue';
    import Tab from '../components/tab.vue';

    export default {
        data() {
            return {
                tableClasses: ['table', 'table-striped', 'table-bordered']
            }
        },

        components: {
            dataTable: DataTableComponent,
            tabs: Tabs,
            tab: Tab
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