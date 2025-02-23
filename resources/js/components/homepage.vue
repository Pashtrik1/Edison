<template>
    <div class="block block-layout-builder">
        <!-- Navbar -->
        <personalmsg ref="bannerRef"></personalmsg>
        <enavbar :style="{ marginTop: bannerHeight + 'px' }"></enavbar>
        <!-- Bild-Sektion -->
        <section class="relative z-0">
            <div class="w-[100%]">
                <picture>
                    <source v-for="(image, index) in models[0].img" :key="index" :srcset="assingi(models[0].img[index].source)" :media="models[0].img[index].media">
                    <img src="../../../public/storage/mainpagecontent/model-Y-2/Homepage-Model-Y-2-Desktop-EMEA-LHD.jpeg" alt="Model Y">
                </picture>
            </div>
        </section>
        <!-- Text über dem Bild -->
        <div class="w-[100%] h-[100%] absolute bottom-0 inset-0 flex justify-center my-9">
            <div class="inset-0 justify-center h-screen relative flex mt-[132px]">
                <div class="text-center tracking-tighter">
                    <h1 class="text-white text-[69px] font-semibold leading-none pb-1">Das neue Model Y</h1>
                    <h3 class="text-white font-semibold text-2xl">Auslieferungen beginnen im März</h3>
                    <div class="flex justify-center mt-4">
                        <div class="flex gap-4 space-x-3">
                            <button type="button" class="w-[255px] h-10 text-white bg-blue-600 hover:bg-blue-800 font-semibold rounded text-sm px-6 py-[3px] dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none">
                                Bestellen
                            </button>
                            <button type="button" class="w-[255px] h-10 text-black bg-white hover:bg-white-800 font-semibold rounded text-sm px-6 py-[3px] dark:bg-white-600 dark:hover:bg-gray-200 focus:outline-none">
                                Weitere Informationen
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <modelH :modeli="models[1]"></modelH>
    <modelH :modeli="models[2]"></modelH>
    <modelH :modeli="models[3]"></modelH>
    <modelH :modeli="models[4]"></modelH>
</template>
<script>
import { nextTick, onMounted, ref } from 'vue';
import enavbar from './navbar.vue';
import personalmsg from './personalmsg.vue';
import modelH from './hopageModel.vue';

export default {
    components: {
        enavbar,
        personalmsg,
        modelH
    },
    setup() {
        const bannerRef = ref(null);
        const bannerHeight = ref(null);
        Banner: "margin-top: " + 0 + "px"

        const updateBannerHeight = () => {
            if (bannerRef.value && bannerRef.value.$el) {
                bannerHeight.value = bannerRef.value.$el.clientHeight || 0;
                Banner: "margin-top: " + bannerHeight + "px";
                console.log("Updated banner height:", bannerHeight.value); // Debugging
            }
        };

        onMounted(() => {
            nextTick(() => {
                updateBannerHeight();
            });

            window.addEventListener('resize', () => {
                nextTick(updateBannerHeight);
            });
        });

        return {
            bannerRef,
            bannerHeight,
        };
    },

    data() {
        return {
            mtnav: 55, 
            models: [
                {
                    model: "Das neue Model Y",
                    img: [
                        { source: "model-Y-2/Homepage-Model-Y-2-Desktop-EMEA-LHD.jpeg", media: "(min-width: 900px) and (orientation: landscape)" },
                        { source: "model-Y-2/Homepage-Model-Y-2-Mobile-EMEA-LHD.avif", media: "(max-height: 599px) and (orientation: landscape)" },
                        { source: "model-Y-2/Homepage-Model-Y-2-Mobile-EMEA-LHD.avif", media: "(max-width: 599px) and (orientation: portrait)" },
                        { source: "model-Y-2/Homepage-Model-Y-2-Tablet-EMEA-LHD.avif", media: "(min-width: 600px) and (orientation: portrait)" },
                        { source: "model-Y-2/Homepage-Model-Y-2-Desktop-EMEA-LHD.avif", media: "(min-width: 900px) and (orientation: portrait)" }
                    ],
                    message: "Seien Sie unter den Ersten, die erfahren, wann unser aktualisiertes Model 3 für Probefahrten verfügbar ist.",
                },
                {
                    model: "Model Y",
                    img: [
                        { source: "model-Y/Homepage-Model-Y-Global-Desktop.jpeg", media: "(min-width: 600px)" },
                        { source: "model-Y/Homepage-Model-Y-Mobile-EMEA-LHD-v3.avif", media: "(max-width: 599px)" },
                        { source: "model-Y/Homepage-Model-Y-Mobile-EMEA-LHD-v3.avif", media: "(min-width: 600px) and (orientation:portrait)" },
                        { source: "model-Y/Homepage-Model-Y-Global-Desktop.jpeg", media: "(min-width: 900px) and (orientation: portrait)" }
                    ],
                    message: ""
                },
                {
                    model: "Model 3",
                    img: [
                        { source: "model-3/Homepage-Model-3-Desktop-US.jpeg", media: "(min-width: 900px) and (orientation: landscape)" },
                        { source: "model-3/Homepage-Model-3-Mobile-US.avif", media: "(max-height: 599px) and (orientation: landscape)" },
                        { source: "model-3/Homepage-Model-3-Mobile-US.avif", media: "(max-width: 599px) and (orientation: portrait)" },
                        { source: "model-3/Homepage-Model-Y-Desktop-EMEA-LHD-v3.avif", media: "(min-width: 900px) and (orientation: portrait)" }
                    ],
                    message: "Verfügbar ab 439 € pro Monat2",
                },
                {
                    model: "Model S",
                    img: [
                        { source: "model-S/Homepage-Model-S-Desktop-US.avif", media: "(min-width: 900px) and (orientation: landscape)" },
                        { source: "model-S/Homepage-Model-S-Mobile-US.avif", media: "(max-height: 599px) and (orientation: landscape)" },
                        { source: "model-S/Homepage-Model-S-Mobile-US.avif", media: "(max-width: 599px) and (orientation: portrait)" },
                        { source: "model-S/Homepage-Model-S-Desktop-US.avif", media: "(min-width: 900px) and (orientation: portrait)" }
                    ],
                    message:"Erhältlich mit unbegrenzter, kostenloser Supercharger-Nutzung und Premium-Konnektivität3"
                },
                {
                    model: "Model X",
                    img: [
                        { source: "model-X/Homepage-Model-X-Desktop-US.avif", media: "(min-width: 900px) and (orientation: landscape)" },
                        { source: "model-X/Homepage-Model-X-Mobile-US.avif", media: "(max-height: 599px) and (orientation: landscape)" },
                        { source: "model-X/Homepage-Model-X-Mobile-US.avif", media: "(max-width: 599px) and (orientation: portrait)" },
                        { source: "model-X/Homepage-Model-X-Desktop-US.avif", media: "(min-width: 900px) and (orientation: portrait)" }
                    ],
                    message:"Erhältlich mit unbegrenzter, kostenloser Supercharger-Nutzung und Premium-Konnektivität3"
                },
                {
                    model: "Tesla erleben",
                    img: [
                        { source: "TeslaErleben/Homepage-Demo-Drive-Desktop-NA.avif", media: "(min-width: 900px) and (orientation: landscape)" },
                        { source: "TeslaErleben/Homepage-Demo-Drive-Desktop-NA.avif", media: "(max-height: 599px) and (orientation: landscape)" },
                        { source: "TeslaErleben/Homepage-Demo-Drive-Desktop-NA.avif", media: "(max-width: 599px) and (orientation: portrait)" },
                        { source: "TeslaErleben/Homepage-Demo-Drive-Desktop-NA.avif", media: "(min-width: 900px) and (orientation: portrait)" }
                    ],
                    message:"!"
                },
                {
                    model: "Powerwall",
                    img: [
                        { source: "model-3/Homepage-Model-Y-Desktop-EMEA-LHD-v3.avif", media: "(min-width: 900px) and (orientation: landscape)" },
                        { source: "model-3/Homepage-Model-Y-Mobile-EMEA-LHD-v3.avif", media: "(max-height: 599px) and (orientation: landscape)" },
                        { source: "model-3/Homepage-Model-Y-Mobile-EMEA-LHD-v3.avif", media: "(max-width: 599px) and (orientation: portrait)" },
                        { source: "model-3/Homepage-Model-Y-Desktop-EMEA-LHD-v3.avif", media: "(min-width: 900px) and (orientation: portrait)" }
                    ],
                    message:""
                },
                {
                    model: "Zubehör",
                    img: [
                        { source: "additional/Homepage-Accessories-Desktop-EMEA-v2.avif", media: "(min-width: 900px) and (orientation: landscape)" },
                        { source: "additional/Homepage-Accessories-Mobile-EMEA-v2.avif", media: "(max-height: 599px) and (orientation: landscape)" },
                        { source: "additional/Homepage-Accessories-Mobile-EMEA-v2.avif", media: "(max-width: 599px) and (orientation: portrait)" },
                        { source: "additional/Homepage-Accessories-Desktop-EMEA-v2.avif", media: "(min-width: 900px) and (orientation: portrait)" }
                    ],
                    message:"",
                    ButtonA: "Shop",
                    ButtonB: "Mehr erfahren"
                }
                // Weitere Modelle...
            ],
        };
    },
    methods: {
        assingi(rootdata) {
            var rootdirect = "/storage/mainpagecontent/" + rootdata;
            return rootdirect;
        }
    }
};
</script>