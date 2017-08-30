<template>
    <table :id="id" :class="classAsString">
        <thead>
        <tr>
            <th v-if="data.length > 0" v-for="key in dataKeys">{{key}}</th>
            <th v-if="ajax !== ''" v-for="col in colKeys">{{col}}</th>
        </tr>
        </thead>

        <tfoot v-if="footer">
        <tr>
            <th v-if="data.length > 0" v-for="key in dataKeys">{{key}}</th>
            <th v-if="ajax !== ''" v-for="col in colKeys">{{col}}</th>
        </tr>
        </tfoot>
    </table>
</template>

<script>
    import DataTable from 'datatables.net';
    import {ucFirst} from "../helpers";

    export default {
        data() {
            return {
                id: this._uid
            }
        },
        props: {
            ajax: {
                type: [String, Object, Function],
                default: () => {return ''}
            },
            classes: {
                type:[Array],
                default: () => {return ['table']}
            },
            data: {
                type:[Array],
                default: () => {return []}
            },
            deferRender: {
                type: [Boolean],
                default: false
            },
            scroll: {
                type: [Object],
                default: () => {return {x: true, y: true};}
            },
            serverSide: {
                type:[Boolean],
                default: false
            },
            stateSave: {
                type: [Boolean],
                default: true
            },
            columns: {
                type: [Array],
                default: () => {return [];}
            },
            footer: {
                type: [Boolean],
                default: false
            },
            paging: {
                type: [Boolean],
                default: true
            },
            searching: {
                type: [Boolean],
                default: true
            },
            ordering: {
                type: [Boolean],
                default: true
            },
            adlOptions: {
                type: [Object],
                default: () => {return {}}
            }
        },
        computed: {
            classAsString() {
                return this.classes === undefined ? '' : this.classes.join(' ');
            },
            dataKeys() {
                if(this.data.length !== 0) {
                    return Object.keys(this.data[0]);
                }
            },
            colKeys() {
                console.log('building columns');
                if(this.columns.length > 0) {
                    let names = [];
                    for(let col of this.columns) {
                        if(col.name !== undefined) names.push(col.name);
                    }
                    console.log(names);
                    return names;
                }
            }
        },
        methods: {
            configDatatables() {
                let opt = {
                    deferRender: this.deferRender,
                    scrollX: this.scroll.x,
                    scrollY: this.scroll.y,
                    serverSide: this.serverSide,
                    stateSave: this.stateSave,
                    columns: this.columns
                };
                if(this.ajax.length > 0) {
                    opt.ajax = this.ajax;
                }else if(this.data.length > 0){
                    opt.data = this.data;
                    if(opt.columns.length === 0) {
                        const keys = this.dataKeys;
                        for (let key of keys) {
                            opt.columns.push({name: ucFirst(key), data: key})
                        }
                    }
                }else {
                    console.error('You need to pass data to the table through either the data prop or the ajax prop.');
                }

                return {
                    ...opt,
                    ...this.adlOptions
                };
            }
        },
        mounted() {
            const dtOptions = this.configDatatables();
            $('#'+this.id).DataTable(dtOptions);
        }
    }
</script>

<style lang="scss">

</style>