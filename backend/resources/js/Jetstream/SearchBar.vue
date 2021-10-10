<template>

    <form @submit.prevent="submit">
        <div class="pt-4 pb-0 pr-4 pl-4">

            <jet-validation-errors class="mb-4" />

            <div class="bg-green-400 flex items-center rounded-full shadow-xl">

                <jet-input class="rounded-l-full w-full py-4 px-6 text-gray-700 leading-tight focus:outline-none" id="search" type="text" placeholder="Eg. Oro Province"  v-model="form.search" autofocus />

                <div class="p-2">
                    <jet-button :type="type" class="bg-blue-400 text-white rounded-full p-2 hover:bg-blue-200 focus:outline-none w-12 h-12 flex items-center justify-center" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                        <svg fill="#000000" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" width="24px" height="24px"><path d="M 9 2 C 5.1458514 2 2 5.1458514 2 9 C 2 12.854149 5.1458514 16 9 16 C 10.747998 16 12.345009 15.348024 13.574219 14.28125 L 14 14.707031 L 14 16 L 20 22 L 22 20 L 16 14 L 14.707031 14 L 14.28125 13.574219 C 15.348024 12.345009 16 10.747998 16 9 C 16 5.1458514 12.854149 2 9 2 z M 9 4 C 11.773268 4 14 6.2267316 14 9 C 14 11.773268 11.773268 14 9 14 C 6.2267316 14 4 11.773268 4 9 C 4 6.2267316 6.2267316 4 9 4 z"/></svg>
                    </jet-button>
                </div>

            </div>

        </div>
    </form>

</template>

<script>
import { defineComponent } from 'vue'
import JetLabel from '@/Jetstream/Label.vue'
import JetButton from '@/Jetstream/Button.vue'
import JetCheckbox from '@/Jetstream/Checkbox.vue'
import JetValidationErrors from '@/Jetstream/ValidationErrors.vue'
import { Link } from '@inertiajs/inertia-vue3';
import JetInput from '@/Jetstream/Input.vue'


export default defineComponent({
    components: {
        JetButton,
        JetInput,
        JetCheckbox,
        JetLabel,
        JetValidationErrors,
        Link,
    },

    props: {
        type: {
            type: String,
            default: 'submit',
        },
    },

    data() {
        return {
            form: this.$inertia.form({
                search: ''
            })
        }
    },

    methods: {
        submit() {
            this.form
                .transform(data => ({
                    ... data
                }))
                .post(this.route('search'), {
                    onFinish: () => this.form.reset('search'),
                })
        }
    }
})
</script>

