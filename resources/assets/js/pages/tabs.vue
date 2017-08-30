<template>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1>Tabs Component</h1>
                <hr>
                <p>
                    The tabs component is a set of components for implementing bootstrap tabs. There are settings allowing
                    setting of type of tabs such as pills, or tabs and setting justified or stacked as well.
                </p>
            </div>
        </div>
    </div>
</template>

<script>
    import Tabs from '../components/tabs.vue';
    import Tab from '../components/tab.vue';
    import Prism from 'prismjs';

    export default {
        components: {
            tabs: Tabs,
            tab: Tab
        },

        mixins: [],

        data () {
            return {
                //
            }
        },

        props: {
            //
        },

        computed: {
            //
        },

        created () {
            //
        },

        mounted () {
            //
        },

        methods: {
            //
        }
    };
</script>
