<template>
    <jet-form-section @submitted="updateDonorInformation">
        <template #title>
            Your Information
        </template>

        <template #description>
            Please provide your name and contact details.
        </template>

        <template #form>

            <!-- Name -->
            <div class="col-span-6 sm:col-span-4">
                <jet-label for="donor_name" value="Name" />
                <jet-input id="donor_name" type="text" class="block w-full mt-1" v-model="form.donor_name" autofocus />
                <jet-input-error :message="form.errors.donor_name" class="mt-2" />
            </div>

            <!-- Email -->
            <div class="col-span-6 sm:col-span-4">
                <jet-label for="donor_email" value="Email" />
                <jet-input id="donor_email" type="text" class="block w-full mt-1" v-model="form.donor_email" autofocus />
                <jet-input-error :message="form.errors.donor_email" class="mt-2" />
            </div>

            <!-- Contact Number -->
            <div class="col-span-6 sm:col-span-4">
                <jet-label for="donor_contact" value="Email" />
                <jet-input id="donor_contact" type="text" class="block w-full mt-1" v-model="form.donor_contact" autofocus />
                <jet-input-error :message="form.errors.donor_contact" class="mt-2" />
            </div>

            <!-- Address -->
            <div class="col-span-6 sm:col-span-4">
                <jet-label for="donor_address" value="Address" />
                <jet-input id="donor_address" type="text" class="block w-full mt-1" v-model="form.donor_address" autofocus />
                <jet-input-error :message="form.errors.donor_address" class="mt-2" />
            </div>

            <!-- Suburb -->
            <div class="col-span-6 sm:col-span-4">
                <jet-label for="donor_suburb" value="Suburb" />
                <jet-input id="donor_suburb" type="text" class="block w-full mt-1" v-model="form.donor_suburb" autofocus />
                <jet-input-error :message="form.errors.donor_suburb" class="mt-2" />
            </div>

            <!-- State / Province -->
            <div class="col-span-6 sm:col-span-4">
                <jet-label for="donor_state" value="State / Province" />
                <jet-input id="donor_state" type="text" class="block w-full mt-1" v-model="form.donor_state" autofocus />
                <jet-input-error :message="form.errors.donor_state" class="mt-2" />
            </div>

            <!-- Postcode -->
            <div class="col-span-6 sm:col-span-4">
                <jet-label for="donor_postcode" value="Postcode / Zipcode" />
                <jet-input id="donor_postcode" type="text" class="block w-full mt-1" v-model="form.donor_postcode" autofocus />
                <jet-input-error :message="form.errors.donor_postcode" class="mt-2" />
            </div>

            <!-- Country -->
            <div class="col-span-6 sm:col-span-4">
                <jet-label for="donor_country" value="Email" />
                <jet-input id="donor_country" type="text" class="block w-full mt-1" v-model="form.donor_country" autofocus />
                <jet-input-error :message="form.errors.donor_country" class="mt-2" />
            </div>

        </template>

        <template #actions>
            <jet-action-message :on="form.recentlySuccessful" class="mr-3">
                Saved.
            </jet-action-message>

            <jet-button :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                Save
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
    import JetActionMessage from '@/Jetstream/ActionMessage.vue'
    import JetSecondaryButton from '@/Jetstream/SecondaryButton.vue'

    export default defineComponent({
        components: {
            JetActionMessage,
            JetButton,
            JetFormSection,
            JetInput,
            JetInputError,
            JetLabel,
            JetSecondaryButton,
        },

        props: ['donor'],

        data() {
            return {
                form: this.$inertia.form({
                    _method: 'PUT',
                    donor_name: this.donor.name,
                    donor_email: this.donor.email,
                    donor_contact: this.donor.contact,
                    donor_address: this.donor.address,
                    donor_suburb: this.donor.suburb,
                    donor_state: this.donor.state,
                    donor_postcode: this.donor.postcode,
                    donor_country: this.donor.country,
                }),

                photoPreview: null,
            }
        },

        methods: {
            updateDonorInformation() {
                this.form.post(route('donor-information.update'), {
                    errorBag: 'updateDonorInformation',
                    preserveScroll: true,
                });
            },
        },
    })
</script>
