<template>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <tabs>
                    <tab title="Blade Template" name="temp" active="true">
                        <pre>
<code id="blade-temp" class="language-html"></code>
                        </pre>
                    </tab>
                    <tab title="Page Component Markup" name="mark">
                        <pre>
<code id="comp-mark" class="language-html"></code>
                        </pre>
                    </tab>
                    <tab title="Page Component Script" name="script">
                        <pre>
<code id="comp-script" class="language-javascript"></code>
                        </pre>
                    </tab>
                </tabs>
            </div>
        </div>
    </div>
</template>

<script>
    import Tabs from '../components/tabs.vue';
    import Tab from '../components/tab.vue';

    export default {
        components: {
            tabs: Tabs,
            tab: Tab
        },

        props: {
            folder: {
                type: [String],
                required: true
            }
        },

        mounted () {
            const mark = document.getElementById('blade-temp');
            const compMark = document.getElementById('comp-mark');
            const compScri = document.getElementById('comp-script');
            mark.innerHTML = Prism.highlight(require('../examples/' + this.folder + '/blade.html'), Prism.languages.html);
            compMark.innerHTML = Prism.highlight(require('../examples/' + this.folder + '/compMark.html'), Prism.languages.html);
            compScri.innerHTML = Prism.highlight(require('../examples/' + this.folder + '/compScript.html'), Prism.languages.javascript);
        },
    };
</script>
