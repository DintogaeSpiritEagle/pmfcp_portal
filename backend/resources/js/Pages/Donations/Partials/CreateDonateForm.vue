<template>
    <jet-form-section @submitted="createDonate">
        <template #title>
            Make a donation here
        </template>

        <template #description>
            To make a donation, please fill out the form and click 'Donate' when ready.
        </template>

        <template #form>
            <div class="col-span-6">
                <jet-label value="Donations Form" />

                <div class="flex items-center mt-2">
                    <img class="object-cover w-12 h-12 rounded-full" :src="'https://icon-library.com/images/icon-profile/icon-profile-1.jpg'" :alt="createDonate">

                    <div class="ml-4 leading-tight">
                        <div>Our Donations</div>
                        <div class="text-sm text-gray-700">Thank you for choosing to suppor us.</div>
                    </div>
                </div>
            </div>

            <div class="col-span-6 sm:col-span-4">
                <jet-label for="card_name" value="Card Name" />
                <jet-input id="card_name" type="text" class="block w-full mt-1" v-model="form.name" autofocus />
                <jet-input-error :message="form.errors.name" class="mt-2" />

                <jet-label for="card_no" value="Card No." />
                <jet-input id="card_no" type="text" class="block w-full mt-1" v-model="form.name" autofocus />
                <jet-input-error :message="form.errors.name" class="mt-2" />

                <jet-label for="card_expiry" value="Card Expiry" />
                <jet-input id="card_expiry" type="text" class="block w-full mt-1" v-model="form.name" autofocus />
                <jet-input-error :message="form.errors.name" class="mt-2" />

                <jet-label for="card_ccv" value="CCV" />
                <jet-input id="card_ccv" type="text" class="block w-full mt-1" v-model="form.name" autofocus />
                <jet-input-error :message="form.errors.name" class="mt-2" />

                <jet-label for="donation_amount" value="Donation Amount" />
                <jet-input id="donation_amount" type="text" class="block w-full mt-1" v-model="form.name" autofocus />
                <jet-input-error :message="form.errors.name" class="mt-2" />
            </div>
        </template>

        <template #actions>
            <jet-button :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                Donate
            </jet-button>
        </template>
    </jet-form-section>
</template>

<script>
    import { defineComponent } from 'vue'
    import JetButton from '@/Jetstream/Button.vue'
    import JetFormSection from '@/Jetstream/FormSection.vue'
    import JetInput from '@/Jetstream/Input.vue'
    import JetInputError from '@/Jetstream/InputError.vue'
    import JetLabel from '@/Jetstream/Label.vue'

    export default defineComponent({
        components: {
            JetButton,
            JetFormSection,
            JetInput,
            JetInputError,
            JetLabel,
        },

        data() {
            return {
                form: this.$inertia.form({
                    card_name: '',
                    card_no: '',
                    card_expiry: '',
                    card_ccv: '',
                    donation_amount: '',
                })
            }
        },

        methods: {
            createDonate() {
                this.form.post(route('donate'), {
                    errorBag: 'createDonate',
                    preserveScroll: true
                });
            },
        },
    })
</script>
