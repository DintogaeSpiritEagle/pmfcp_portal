<template>
    <app-layout title="Electorates">
        <template #header>
            <h2 class="font-semibold text-lg text-gray-800 leading-tight">

                <div class="mt-3 flex items-center">
                    <Link :href="route('dashboard')"><div class="text-indigo-700">Dashboard</div></Link>

                    <div class="ml-1 text-indigo-500">
                        <svg viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </div>
                    &nbsp; Electorates
                </div>

            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:p-6">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="mx-auto sm:p-6 lg:p-8">

                        <div class="text-center mt-6 text-gray-800 p-5">
                            PNG Electorates List
                        </div>

                        <div class="flex items-center justify-center sm:text-left">

                            <table class="flex-1 h-8 table-auto whitespace-nowrap overflow-x-auto">

                                <thead class="bg-gray-400">
                                    <tr class="text-left font-bold">
                                        <td class="p-2">ID</td>
                                        <td class="p-2">Electorate</td>
                                        <td class="p-2">Province</td>
                                        <td class="p-2">Region</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <template v-for="electorate in electorates">
                                        <tr class="p-2 even:bg-blue-300 odd:bg-blue-200 hover:bg-green-100">
                                            <td class="p-2">{{ electorate.id }}</td>
                                            <td class="p-2">{{ electorate.name }}</td>
                                            <td class="p-2">{{ electorate.province.name }}</td>
                                            <td class="p-2">{{ electorate.region.name }}</td>
                                        </tr>
                                    </template>
                                </tbody>

                            </table>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </app-layout>
    <jet-footer />

</template>

<script>
    import { defineComponent } from 'vue'
    import AppLayout from '@/Layouts/AppLayout.vue'
    import JetFooter from '@/Jetstream/Footer.vue'
    import { Head, Link } from '@inertiajs/inertia-vue3';

    export default defineComponent({
        components: {
            AppLayout,
            JetFooter,
            Head,
            Link
        },

        props: [
            'electorates',
        ]
    })
</script>
