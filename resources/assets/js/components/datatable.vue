<template>
    <table :id="id" :class="classAsString"></table>
</template>

<script>
    import DataTable from 'datatables.net';

    export default {
        data() {
            return {
                id: this._uid
            }
        },
        props: {
            ajax: {
                type: [String, Object, Function],
                default: null
            },
            classes: {
                type:[String, Array],
                default: () => {return ['table']}
            },
            data: {
                type:[Array],
                default: null
            },
            deferRender: {
                type: [Boolean],
                default: false
            },
            scroll: {
                type: [Object],
                default: () => {return {x: true, y: true}}
            },
            serverSide: {
                type:[Boolean],
                default: false
            },
            stateSave: {
                type: [Boolean],
                default: true
            }
        },
        computed: {
            classAsString: () => {
                return this.classes === undefined ? '' : this.classes.join(' ');
            }
        },
        methods: {
            configDatatables() {
                let opt = {
                    deferRender: this.deferRender,
                    scrollX: this.scroll.x,
                    scrollY: this.scroll.y,
                    serverSide: this.serverSide,
                    stateSave: this.stateSave
                };
                if(this.ajax) {
                    opt.ajax = this.ajax;
                }else if(this.data){
                    opt.data = this.data;
                }else {
                    console.error('You need to pass data to the table through either the data prop or the ajax prop.');
                }
                return opt;

            }
        },
        mounted() {
            console.log(this.classes);
            const dtOptions = this.configDatatables();
            $('#'+this.id).DataTable(dtOptions);
        }
    }
</script>

<style lang="scss">

</style>