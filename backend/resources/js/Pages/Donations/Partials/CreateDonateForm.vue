<template>
    <jet-form-section @submitted="createDonate">
        <template #title>
            Donation Options
        </template>

        <template #description>
            To make a donation, please choose an option that works for you.

            <div class="col-span-6">
                <div class="flex items-center mt-2">

                    <div class="ml-4 leading-tigh">

                        <div class="p-2">
                            <div class="text-gray-800 text-lg">Option 1: Donate Online</div>
                            <div class="text-sm text-gray-700">
                                Fill out the "Donation Form" and click "Donate". <br>
                                Please note that at this stage, we only accept any recognized Mastercard or Visa card.
                            </div>
                        </div>

                        <div class="p-2">
                            <div class="text-gray-800 text-lg">Option 2: Bank Transfer</div>
                            <div class="text-sm text-gray-700">
                                Bank: BSP<br>
                                Account Name: PMFCParty<br>
                                Account No.: 123456789123<br>
                                BSB No.: 123456<br>
                                Swift code: BOSPPG<br>
                                Transfer reference: "Donation"
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </template>

        <template #form>
            <div class="col-span-6">
                <jet-label value="Donations Form" />
            </div>

            <div class="col-span-6 sm:col-span-4">
                <jet-label for="card_name" value="Card Name" />
                <jet-input id="card_name" type="text" class="block w-full mt-1" v-model="form.card_name" autofocus />
                <jet-input-error :message="form.errors.card_name" class="mt-2" />

                <jet-label for="card_no" value="Card No." />
                <jet-input id="card_no" type="text" class="block w-full mt-1" v-model="form.card_no" autofocus />
                <jet-input-error :message="form.errors.card_no" class="mt-2" />

                <jet-label for="card_expiry" value="Card Expiry" />
                <jet-input id="card_expiry" type="text" class="block w-full mt-1" v-model="form.card_expiry" autofocus />
                <jet-input-error :message="form.errors.card_expiry" class="mt-2" />

                <jet-label for="card_ccv" value="CCV" />
                <jet-input id="card_ccv" type="text" class="block w-full mt-1" v-model="form.card_ccv" autofocus />
                <jet-input-error :message="form.errors.card_ccv" class="mt-2" />

                <jet-label for="donation_amount" value="Donation Amount (PGK)" />
                <jet-input id="donation_amount" type="text" class="block w-full mt-1" v-model="form.donation_amount" autofocus />
                <jet-input-error :message="form.errors.donation_amount" class="mt-2" />
            </div>
            <div class="col-span-6">
                <div class="flex items-center">
                    <img class="object-cover rounded-2" width="180" height="180" :src="getPCimages()" :alt="mastercard">
                    <svg xmlns="http://www.w3.org/2000/svg" width="180" height="180" viewBox="0 0 538 212"><g fill="none"><g fill="#006D69"><path d="M320.3 133.8c-17.2 5.4-34 10.7-51.2 16.1V68.6c0-3.4 0-3.4-3.5-3.4-8.8 0-17.7.1-26.5 0-2.3 0-3 .7-3 3 .1 26.5.1 52.9 0 79.4 0 2.1.6 2.9 2.8 2.9 9-.1 18 0 27.2.3-.5.2-1.1.5-1.6.7-63.2 19.9-126.5 39.8-189.7 59.7-1.3.4-2.4.9-3.1-1-7.2-19.7-14.5-39.4-21.9-59.5 1.3-.1 2.3-.2 3.3-.2 8.7 0 17.3-.1 26 .1 2.5 0 3.1-.8 3-3.1-.1-6.4.1-12.8-.1-19.2-.1-2.6.8-3.2 3.3-3.2 9.2.2 18.4-.6 27.2-3.8 8.4-3.1 15.3-7.9 18.7-16.5 5.5-13.6-.1-27.6-13.5-33.8-7.6-3.5-15.7-5.2-23.9-5.3-14-.3-28-.1-42-.3-2.7 0-2.4 1.7-2.4 3.3v79.1c-.2 0-.4.1-.5.1C32.5 103.5 16.3 59.5 0 15c5.5-.3 10.7-.7 15.9-1 45.6-2.5 91.3-5.1 136.9-7.6 35.2-2 70.3-4 105.5-6 2-.1 2.6.9 3.2 2.3 13.9 31 27.8 62 41.8 93 5.2 11.6 10.4 23.2 15.6 34.7.4 1 .7 2 1.4 3.4zm-99.2-43c.1-1.2.2-2.1.2-2.9 0-5.8-.1-11.6.1-17.3.1-2.2-.7-3.1-2.7-3.7-9.7-3.3-19.6-3.5-29.6-3-9.4.5-18.6 2.5-27 7.1-15.2 8.2-23.7 20.6-23.2 38.2.5 17.9 9.6 30.3 26 36.9 18.5 7.5 37.4 7.2 56.5 2.1 1.6-.4 2-1.3 2-2.8-.1-5.8-.1-11.6-.1-17.3 0-.6-.2-1.1-.3-1.8-4.5 1.2-8.7 2.6-13 3.5-7.7 1.5-15.3 1.7-22.8-1.3-9.7-3.8-14.9-12.4-13.9-22.9 1-11.1 7.2-18.1 17.8-20.1 9.4-1.7 18.3.1 26.8 4 .9.3 1.9.7 3.2 1.3zm51.3-52.1c0-11.2-8-18.7-19.9-18.7-11.9 0-19.9 7.5-19.9 18.7 0 11 8 18.5 19.8 18.6 11.9.1 20-7.5 20-18.6z"/><path d="M86.2 106c-.7 0-1.4.1-2.1.1-1.6.2-2.4-.4-2.4-2.2.1-5.9 0-11.9 0-17.8 0-1.3.2-2.3 1.8-2.2 3.8.4 7.7.6 11.4 1.5 4.3 1.1 6.4 4.4 6.5 8.8.2 4.9-1.6 8.3-5.8 9.9-3 1.1-6.2 1.6-9.3 2.3-.1-.1-.1-.3-.1-.4z"/></g><path d="M350.7 74.4h29.2c5.8 0 10.4.8 13.9 2.3 3.5 1.6 6.5 3.8 8.8 6.7 2.3 2.9 4 6.3 5 10.2 1 3.9 1.6 8 1.6 12.3 0 6.8-.8 12.1-2.3 15.8-1.5 3.7-3.7 6.9-6.4 9.4s-5.7 4.2-8.8 5.1c-4.3 1.2-8.2 1.7-11.7 1.7h-29.2V74.4h-.1zm19.6 14.4v34.7h4.8c4.1 0 7-.5 8.8-1.4 1.7-.9 3.1-2.5 4.1-4.8 1-2.3 1.5-5.9 1.5-11 0-6.7-1.1-11.3-3.3-13.8-2.2-2.5-5.8-3.7-10.9-3.7h-5zm45.8 28.2 18.7-1.2c.4 3 1.2 5.3 2.5 6.9 2 2.6 4.9 3.9 8.7 3.9 2.8 0 5-.7 6.5-2s2.3-2.8 2.3-4.6c0-1.6-.7-3.1-2.2-4.4-1.4-1.3-4.8-2.5-10.1-3.7-8.6-1.9-14.8-4.5-18.4-7.7-3.7-3.2-5.6-7.3-5.6-12.3 0-3.3.9-6.4 2.8-9.3 1.9-2.9 4.7-5.2 8.5-6.9 3.8-1.7 9-2.5 15.6-2.5 8.1 0 14.3 1.5 18.6 4.5 4.3 3 6.8 7.8 7.6 14.4l-18.5 1.1c-.5-2.9-1.5-4.9-3.1-6.2-1.6-1.3-3.8-2-6.5-2-2.3 0-4 .5-5.2 1.5-1.2 1-1.7 2.1-1.7 3.5 0 1 .5 1.9 1.4 2.7.9.8 3.1 1.6 6.6 2.3 8.6 1.9 14.7 3.7 18.5 5.6 3.7 1.9 6.4 4.2 8.1 7 1.7 2.8 2.5 5.9 2.5 9.4 0 4.1-1.1 7.8-3.4 11.3-2.3 3.4-5.4 6-9.5 7.8-4 1.8-9.2 2.7-15.3 2.7-10.8 0-18.3-2.1-22.5-6.2-4-3.9-6.4-9.2-6.9-15.6zm64.1 0 18.7-1.2c.4 3 1.2 5.3 2.5 6.9 2 2.6 4.9 3.9 8.7 3.9 2.8 0 5-.7 6.5-2s2.3-2.8 2.3-4.6c0-1.6-.7-3.1-2.2-4.4-1.4-1.3-4.8-2.5-10.1-3.7-8.6-1.9-14.8-4.5-18.4-7.7-3.7-3.2-5.6-7.3-5.6-12.3 0-3.3.9-6.4 2.8-9.3 1.9-2.9 4.7-5.2 8.5-6.9 3.8-1.7 9-2.5 15.6-2.5 8.1 0 14.3 1.5 18.6 4.5 4.3 3 6.8 7.8 7.6 14.4l-18.5 1.1c-.5-2.9-1.5-4.9-3.1-6.2-1.6-1.3-3.8-2-6.5-2-2.3 0-4 .5-5.2 1.5-1.2 1-1.7 2.1-1.7 3.5 0 1 .5 1.9 1.4 2.7.9.8 3.1 1.6 6.6 2.3 8.6 1.9 14.7 3.7 18.5 5.6 3.7 1.9 6.4 4.2 8.1 7 1.7 2.8 2.5 5.9 2.5 9.4 0 4.1-1.1 7.8-3.4 11.3-2.3 3.4-5.4 6-9.5 7.8-4 1.8-9.2 2.7-15.3 2.7-10.8 0-18.3-2.1-22.5-6.2-4-3.9-6.4-9.2-6.9-15.6z" fill="#00716D"/></g></svg>
                </div>
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
            getPCimages() {
                return 'img/mastercard_visacard.png';
            }
        },
    })
</script>
