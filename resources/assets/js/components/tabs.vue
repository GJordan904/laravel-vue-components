<template>
    <div>
    <ul class="nav nav-tabs">
        <li role="presentation" :class="{'active':tab.active, classList}" v-for="tab in tablist" ><a :href="'#'+tab.name" :aria-controls="tab.name" role="tab" data-toggle="tab">{{tab.title}}</a></li>
    </ul>
    <div class="tab-content">
        <slot></slot>
    </div>
    </div>
</template>
<script>
    export default{
        props: {
            type: {
                type: String,
                default: 'tabs'
            },
            direction: {
                type: String,
                default: 'horizontal'
            },
            centered: {
                type: Boolean,
                default: false
            }
        },
        computed: {
            classList () {
                let navType = this.isTabShape ? 'nav-tabs' : 'nav-pills';
                let centerClass = this.centered ? 'nav-justified' : '';
                let isStacked = this.isStacked ? 'nav-stacked' : '';
                return `nav ${navType} ${centerClass} ${isStacked}`;
            },
        },
        data () {
            return {
                tablist: []
            }
        },
        methods: {
            isTabShape () {
                return this.type === 'tabs'
            },
            isStacked () {
                return this.direction === 'vertical'
            }
        },
        mounted(){
            this.$children.forEach(c=>{
                this.tablist.push({
                    "name": c.name,
                    "title": c.title,
                    "active": c.active
                });
            })
        }
    }
</script>