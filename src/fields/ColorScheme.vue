<template>
    <div>
        <k-field id="k-field-color-scheme" :label="$t('foerdeliebe.color-schemes.title')">
            <k-grid id="k-field-color-scheme" style="gap: 0.8rem; --columns: 6">
                <div
                    align="center"
                    class="k-box"
                    v-for="option in options.schemes" 
                    :key="option" 
                    @click="$emit('input', option.name)"
                    :style="{ background: option.colors.background, color: option.colors.text }"
                    :class="{ 'k-active': value === option.name }"
                    :title="option.label"
                >
                    <k-headline class="k-field-color-scheme-font">Aa</k-headline>
                    <k-grid class="k-field-color-scheme-buttons">
                        <div 
                            :style="{ borderColor: option.colors.text, justifySelf: 'center' }"
                        ></div>
                        <div 
                            :style="{ borderColor: option.colors.text, background: option.colors.text, justifySelf: 'center' }"
                        ></div>
                    </k-grid>
                </div>
            </k-grid>

            <footer class="k-field-footer">
                <div class="k-help k-field-help k-text">{{ getSchemeName() }}</div>
            </footer>
        </k-field>
    </div>
</template>

<script>
export default {
    name: 'ColorScheme',
    props: {
        value: {
            type: String,
            default: '',
        },
        options: {
            type: Array,
            default: () => [],
        },
    },
    methods: {
        // Your component's methods go here
        getSchemeName() {
            return this.options.schemes.find((scheme) => scheme.name === this.value).label;
        },
    },
    computed: {
        // Your component's computed properties go here
    },
    mounted() {
        // Code to run when the component is mounted goes here
    },
};
</script>

<style scoped>
.k-box {
    border-radius: 8px;
    display: block;
    padding: 1rem;
    text-align: center;
    cursor: pointer;
    border: 2px solid transparent;
    transition: background-color 0.2s, color 0.2s;
}

.k-box:hover {
    border: 2px solid rgba(255, 255, 255, 0.4);
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
}

.k-box.k-active {
    border: 2px solid rgba(255, 255, 255, .7);
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
}

.k-field-color-scheme-font {
    font-size: 1.8rem;
    margin-bottom: 0.5rem;
}

.k-field-color-scheme-buttons {
    --columns: 2;
    gap: 0.3rem;
    align-items: center;
    margin-top: 0.5rem;
}

.k-field-color-scheme-buttons div {
    width: 2rem;
    height: 1rem;
    border-radius: 4px;
    border-width: 1px;
    border-style: solid;
}
</style>