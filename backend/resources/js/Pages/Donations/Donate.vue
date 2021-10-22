<template>
    <app-layout title="Create Donate">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Make a Donation
            </h2>
        </template>

        <div>
            <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                <create-donate-form />
            </div>
        </div>
    </app-layout>
</template>

<script>
    import { defineComponent } from 'vue'
    import AppLayout from '@/Layouts/AppLayout.vue'
    import CreateDonateForm from '@/Pages/Donations/Partials/CreateDonateForm.vue'

    export default defineComponent({
        components: {
            AppLayout,
            CreateDonateForm,
        },

        props: [
            'test',
            'test2',
            'test3'
        ],
    })
</script>
