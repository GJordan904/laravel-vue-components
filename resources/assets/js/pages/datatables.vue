<template>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h2>Data From View</h2>
                <hr>
                <p>
                    This is the component in its simplest form. Here we simply pass an array from Laravel through the
                    blade template as a prop on the page component.
                </p>
                <p>
                    Data can be passed directly to datatables as a json array on the data prop. With this configuration
                    that is all you actually have to provide. However, in this example I am also passing some classes to
                    be applied to the table as well as setting auto-width to false.
                </p>
                <data-table
                        :data="tblOne"
                        :classes="tableClasses"
                        :adl-options="{autoWidth: false}">
                </data-table>
            </div>

            <div class="col-md-8">
                <tabs>
                    <tab title="Blade Template" name="blade" active="true">
                        <pre>
<code id="ex1html" class="language-html"></code>
                        </pre>
                    </tab>
                    <tab title="Page Component Markup" name="compmark">
                        <pre>
<code id="ex1compmarkup" class="language-html"></code>
                        </pre>
                    </tab>
                    <tab title="Page Component Script" name="compscri">
                        <pre>
<code id="ex1compscript" class="language-javascript"></code>
                        </pre>
                    </tab>
                </tabs>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <h2>Data From Ajax</h2>
                <hr>
                <p>Here we are getting ajax sourced data and changing a few of the default settings. The important
                    thing to note about ajax sourced data is that you must pass the columns prop.
                </p>
            </div>
            <data-table :ajax="tblTwo"
                        :columns="ex2Columns"
                        :classes="tableClasses"
                        :searching="false"
                        :footer="true"
                        :deferRender="true"
                        :adl-options="{autoWidth: false}">
            </data-table>
            <div class="col-md-8">
                <tabs>
                    <tab title="Blade Template" name="blade2" active="true">
                        <pre>
<code id="ex2html" class="language-html"></code>
                        </pre>
                    </tab>
                    <tab title="Page Component Markup" name="compmark2">
                        <pre>
<code id="ex2compmarkup" class="language-html"></code>
                        </pre>
                    </tab>
                    <tab title="Page Component Script" name="compscri2">
                        <pre>
<code id="ex2compscript" class="language-javascript"></code>
                        </pre>
                    </tab>
                </tabs>
            </div>
        </div>
    </div>
</template>

<script>
    import DataTableComponent from '../components/datatable.vue';
    import Tabs from '../components/tabs.vue';
    import Tab from '../components/tab.vue';
    import Prism from 'prismjs';

    export default {
        data() {
            return {
                tableClasses: ['table', 'table-striped', 'table-bordered'],
                ex2Columns: [
                    {name: 'Name', data: 'name'},
                    {name: 'Email', data: 'email'},
                    {name: 'City', data: 'city'},
                    {name: 'State', data: 'state'}
                ]
            }
        },

        components: {
            dataTable: DataTableComponent,
            tabs: Tabs,
            tab: Tab
        },

        props: {
            tblOne: {
                type: [Array]
            },
            tblTwo: {
                type: [String]
            }
        },

        computed: {

        },

        methods: {
        },

        mounted() {
            const ex1Mark = document.getElementById('ex1html');
            const ex1CompMark = document.getElementById('ex1compmarkup');
            const ex1CompScri = document.getElementById('ex1compscript');
            ex1Mark.innerHTML = Prism.highlight(require('../examples/datatables.arrayMark.html'), Prism.languages.html);
            ex1CompMark.innerHTML = Prism.highlight(require('../examples/datatables.arrayCompMark.html'), Prism.languages.html);
            ex1CompScri.innerHTML = Prism.highlight(require('../examples/datatables.arrayCompScri.html'), Prism.languages.javascript);

            const ex2Mark = document.getElementById('ex2html');
            const ex2CompMark = document.getElementById('ex2compmarkup');
            const ex2CompScri = document.getElementById('ex2compscript');
            ex2Mark.innerHTML = Prism.highlight(require('../examples/datatables.ajaxMark.html'), Prism.languages.html);
            ex2CompMark.innerHTML = Prism.highlight(require('../examples/datatables.ajaxCompMark.html'), Prism.languages.html);
            ex2CompScri.innerHTML = Prism.highlight(require('../examples/datatables.ajaxCompScri.html'), Prism.languages.javascript);
        }
    }
</script>

<style lang="scss">
pre, code {
    background-color: #2e3436;
}
</style>