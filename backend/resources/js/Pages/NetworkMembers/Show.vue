<template>
    <div>
        {{ test }}
    </div>
</template>

<script>
    import { defineComponent } from 'vue'
    import JetApplicationLogo from '@/Jetstream/ApplicationLogo.vue'
    import { Head, Link } from '@inertiajs/inertia-vue3';

    export default defineComponent({
        components: {
            JetApplicationLogo,
            Head,
            Link
        },

        props: [
            'test'
        ],
    })
</script>
