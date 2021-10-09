<template>

    <div class="max-h-100 bg-gray-800 text-center">

        <div class="w-screen">

            <div class="mt-6 text-white">
                CONTACT US | Email: info@pmfcparty.com | Website: <a href="https://www.pmfcparty.com/contact-us">www.pmfcparty.com</a>
            </div>

            <div class="mt-6 text-white">
                <div class="text-sm text-white">
                    Powered by <a href="http://www.pmfcparty.com">&copy;PMFCParty PNG 2021</a>
                </div>
            </div>

        </div>

    </div>

</template>

<script>
    import { defineComponent } from 'vue'
    import { Link } from '@inertiajs/inertia-vue3'
    import { computed } from 'vue'
    import { useGeolocation } from '../useGeolocation'
    import { Loader } from '@googlemaps/js-api-loader'
    import { ref, onMounted } from 'vue'
    import JetSectionBorder from '@/Jetstream/SectionBorder.vue'

    export default defineComponent({
        components: {
            Link,
            JetSectionBorder
        },

        props: {
            canLogin: Boolean,
            canRegister: Boolean
        },

        setup() {

            // Note: Can put the "search" functionality here as well.

            // const GOOGLE_MAPS_API_KEY = '{{ config('googlemapsapi.googlemaps_apikey') }}'
            // const GOOGLE_MAPS_API_KEY = "AIzaSyB7j-QlrcPdpfpQfpxPCamRZrh4-6qoddk"
            // const { coords } = useGeolocation()
            // const currPos = computed(() => ({
            //     lat: coords.value.latitude,
            //     lng: coords.value.longitude
            // }))

            // const pomcityLatLng => ({
            //     lat: "-9.443800",
            //     lng: "147.180267"
            // })

            // const loader = new Loader({ apiKey: GOOGLE_MAPS_API_KEY })
            // const mapDiv = ref(null)
            // onMounted(async () => {
            //     await loader.load()
            //     new google.maps.Map(mapDiv.value, {
            //         center: currPos.value,
            //         zoom: 7
            //     })
            // })

            // return { currPos, mapDiv, GOOGLE_MAPS_API_KEY }
        }

    })
</script>
