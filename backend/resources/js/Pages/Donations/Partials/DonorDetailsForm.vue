<template>
    <jet-form-section @submitted="createDonate">
        <template #title>
            Donor's Details
        </template>

        <template #description>
            Please fill in the following form and hit 'save' prior to donating via one of the 'Payment Options' below.
        </template>

        <template #form>
            <div class="col-span-6">
                <jet-label class="text-xl" value="Your Contact Details" />
            </div>

            <div class="col-span-6 sm:col-span-4">
                <jet-label for="donor_fname" value="First Name" />
                <jet-input id="donor_fname" type="text" class="block w-full mt-1" v-model="form.donor_fname" autofocus />
                <jet-input-error :message="form.errors.donor_fname" class="mt-2" />

                <jet-label for="donor_lname" value="Last Name" />
                <jet-input id="donor_lname" type="text" class="block w-full mt-1" v-model="form.donor_lname" autofocus />
                <jet-input-error :message="form.errors.donor_lname" class="mt-2" />

                <jet-label for="donor_email" value="Email Address" />
                <jet-input id="donor_email" type="text" class="block w-full mt-1" v-model="form.donor_email" autofocus />
                <jet-input-error :message="form.errors.donor_email" class="mt-2" />

                <jet-label for="donor_phone" value="Contact Number" />
                <jet-input id="donor_phone" type="text" class="block w-full mt-1" v-model="form.donor_phone" autofocus />
                <jet-input-error :message="form.errors.donor_phone" class="mt-2" />

                <jet-label for="donor_address" value="Address" />
                <jet-input id="donor_address" type="text" class="block w-full mt-1" v-model="form.donor_address" autofocus />
                <jet-input-error :message="form.errors.donor_address" class="mt-2" />

                <jet-label for="donor_suburb" value="Suburb" />
                <jet-input id="donor_suburb" type="text" class="block w-full mt-1" v-model="form.donor_suburb" autofocus />
                <jet-input-error :message="form.errors.donor_suburb" class="mt-2" />

                <jet-label for="donor_postcode" value="Postcode" />
                <jet-input id="donor_postcode" type="text" class="block w-full mt-1" v-model="form.donor_postcode" autofocus />
                <jet-input-error :message="form.errors.donor_postcode" class="mt-2" />

                <jet-label for="donor_state" value="State / Province" />
                <jet-input id="donor_state" type="text" class="block w-full mt-1" v-model="form.donor_state" autofocus />
                <jet-input-error :message="form.errors.donor_state" class="mt-2" />

                <jet-label for="donor_country" value="Country" />
                <jet-input id="donor_country" type="text" class="block w-full mt-1" v-model="form.donor_country" autofocus />
                <jet-input-error :message="form.errors.donor_country" class="mt-2" />
            </div>

        </template>

        <template #actions>
            <div>
                <jet-button :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Save
                </jet-button>
            </div>
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
                    name: this.donor,
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
