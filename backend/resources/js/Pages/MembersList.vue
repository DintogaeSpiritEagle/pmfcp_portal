<template>
    <app-layout title="Network">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Members Network
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <jet-members-list />
                </div>
            </div>
        </div>
    </app-layout>
    <jet-footer />

</template>

<script>
    import { defineComponent } from 'vue'
    import AppLayout from '@/Layouts/AppLayout.vue'
    import JetMembersList from '@/Jetstream/MembersList.vue'
    import JetFooter from '@/Jetstream/Footer.vue'

    export default defineComponent({
        components: {
            AppLayout,
            JetMembersList,
            JetFooter
        },
    })
</script>
