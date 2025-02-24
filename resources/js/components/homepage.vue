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
                                {{ models[0].buttonA }}
                            </button>
                            <button type="button" class="w-[255px] h-10 text-black bg-white hover:bg-white-800 font-semibold rounded text-sm px-6 py-[3px] dark:bg-white-600 dark:hover:bg-gray-200 focus:outline-none">
                                {{ models[0].buttonB }}
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
    <modelH :modeli="models[5]"></modelH>
    <modelH :modeli="models[6]"></modelH>
    <modelH :modeli="models[7]"></modelH>
    <modelF :modeli="models[8]"></modelF>
    <abg></abg>
    <Hfooter></Hfooter>
</template>
<script>
import { nextTick, onMounted, ref } from 'vue';
import enavbar from './navbar.vue';
import personalmsg from './personalmsg.vue';
import modelH from './hopageModel.vue';
import modelF from './Finisher.vue';
import abg from './agb.vue';
import Hfooter from './Hfooter.vue';

export default {
    components: {
        enavbar,
        personalmsg,
        modelH,
        modelF,
        abg,
        Hfooter
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
                    mediaType: "image",
                    img: [
                        { source: "model-Y-2/Homepage-Model-Y-2-Desktop-EMEA-LHD.jpeg", media: "(min-width: 900px) and (orientation: landscape)" },
                        { source: "model-Y-2/Homepage-Model-Y-2-Mobile-EMEA-LHD.avif", media: "(max-height: 599px) and (orientation: landscape)" },
                        { source: "model-Y-2/Homepage-Model-Y-2-Mobile-EMEA-LHD.avif", media: "(max-width: 599px) and (orientation: portrait)" },
                        { source: "model-Y-2/Homepage-Model-Y-2-Tablet-EMEA-LHD.avif", media: "(min-width: 600px) and (orientation: portrait)" },
                        { source: "model-Y-2/Homepage-Model-Y-2-Desktop-EMEA-LHD.avif", media: "(min-width: 900px) and (orientation: portrait)" }
                    ],
                    message: "Seien Sie unter den Ersten, die erfahren, wann unser aktualisiertes Model 3 für Probefahrten verfügbar ist.",
                    buttonA: "Bestellen",
                    buttonB: "Weitere Informationen"
                },
                {
                    model: "Model Y",
                    mediaType: "image",
                    img: [
                        { source: "model-Y/Homepage-Model-Y-Global-Desktop.jpeg", media: "(min-width: 600px)" },
                        { source: "model-Y/Homepage-Model-Y-Mobile-EMEA-LHD-v3.avif", media: "(max-width: 599px)" },
                        { source: "model-Y/Homepage-Model-Y-Mobile-EMEA-LHD-v3.avif", media: "(min-width: 600px) and (orientation:portrait)" },
                        { source: "model-Y/Homepage-Model-Y-Global-Desktop.jpeg", media: "(min-width: 900px) and (orientation: portrait)" }
                    ],
                    message: "",
                    buttonA: "Bestellen",
                    buttonB: "Probefahrt"
                },
                {
                    model: "Model 3",
                    mediaType: "image",
                    img: [
                        { source: "model-3/Homepage-Model-3-Desktop-US.jpeg", media: "(min-width: 900px) and (orientation: landscape)" },
                        { source: "model-3/Homepage-Model-3-Mobile-US.avif", media: "(max-height: 599px) and (orientation: landscape)" },
                        { source: "model-3/Homepage-Model-3-Mobile-US.avif", media: "(max-width: 599px) and (orientation: portrait)" },
                        { source: "model-3/Homepage-Model-Y-Desktop-EMEA-LHD-v3.avif", media: "(min-width: 900px) and (orientation: portrait)" }
                    ],
                    message: "Verfügbar ab 439 € pro Monat²",
                    buttonA: "Bestellen",
                    buttonB: "Probefahrt"
                },
                {
                    model: "Model S",
                    mediaType: "image",
                    img: [
                        { source: "model-S/Homepage-Model-S-Desktop-US.avif", media: "(min-width: 900px) and (orientation: landscape)" },
                        { source: "model-S/Homepage-Model-S-Mobile-US.avif", media: "(max-height: 599px) and (orientation: landscape)" },
                        { source: "model-S/Homepage-Model-S-Mobile-US.avif", media: "(max-width: 599px) and (orientation: portrait)" },
                        { source: "model-S/Homepage-Model-S-Desktop-US.avif", media: "(min-width: 900px) and (orientation: portrait)" }
                    ],
                    message:"Erhältlich mit unbegrenzter, kostenloser Supercharger-Nutzung und Premium-Konnektivität³",
                    buttonA: "Bestellen",
                    buttonB: "Probefahrt"
                },
                {
                    model: "Model X",
                    mediaType: "image",
                    img: [
                        { source: "model-X/Homepage-Model-X-Desktop-US.avif", media: "(min-width: 900px) and (orientation: landscape)" },
                        { source: "model-X/Homepage-Model-X-Mobile-US.avif", media: "(max-height: 599px) and (orientation: landscape)" },
                        { source: "model-X/Homepage-Model-X-Mobile-US.avif", media: "(max-width: 599px) and (orientation: portrait)" },
                        { source: "model-X/Homepage-Model-X-Desktop-US.avif", media: "(min-width: 900px) and (orientation: portrait)" }
                    ],
                    message:"Erhältlich mit unbegrenzter, kostenloser Supercharger-Nutzung und Premium-Konnektivität³",
                    buttonA: "Bestellen",
                    buttonB: "Probefahrt"
                },
                {
                    model: "Edison erleben",
                    mediaType: "video",
                    img: [
                        { source: "TeslaErleben/Homepage-Demo-Drive-Desktop-NA.webm", media: "(min-width: 900px) and (orientation: landscape)", type: "video/webm" },
                        { source: "TeslaErleben/Homepage-Demo-Drive-Desktop-NA.webm", media: "(max-height: 599px) and (orientation: landscape)", type: "video/webm" },
                        { source: "TeslaErleben/Homepage-Demo-Drive-Desktop-NA.webm", media: "(max-width: 599px) and (orientation: portrait)", type: "video/webm" },
                        { source: "TeslaErleben/Homepage-Demo-Drive-Desktop-NA.webm", media: "(min-width: 900px) and (orientation: portrait)", type: "video/webm" }
                   ],
                    message:"",
                    buttonA: null,
                    buttonB: "Probefahrt"
                },
                {
                    model: "Powerwall",
                    mediaType: "image",
                    img: [
                        { source: "powerwall/Homepage-Powerwall-3-Desktop-ROW.avif", media: "(min-width: 900px) and (orientation: landscape)" },
                        { source: "powerwall/Homepage-Powerwall-3-Mobile-ROW.avif", media: "(max-height: 599px) and (orientation: landscape)" },
                        { source: "powerwall/Homepage-Powerwall-3-Mobile-ROW.avif", media: "(max-width: 599px) and (orientation: portrait)" },
                        { source: "powerwall/Homepage-Powerwall-3-Desktop-ROW.avif", media: "(min-width: 900px) and (orientation: portrait)" }
                    ],
                    message:" ",
                    buttonA: "Angebot einholen",
                    buttonB: "Weitere Informationen"
                },
                {
                    model: "Zubehör",
                    mediaType: "image",
                    img: [
                        { source: "additional/Homepage-Accessories-Desktop-EMEA-v2.jpg", media: "(min-width: 900px) and (orientation: landscape)" },
                        { source: "additional/Homepage-Accessories-Mobile-EMEA-v2.jpg", media: "(max-height: 599px) and (orientation: landscape)" },
                        { source: "additional/Homepage-Accessories-Mobile-EMEA-v2.jpg", media: "(max-width: 599px) and (orientation: portrait)" },
                        { source: "additional/Homepage-Accessories-Desktop-EMEA-v2.jpg", media: "(min-width: 900px) and (orientation: portrait)" }
                    ],
                    message:"",
                    buttonA: null,
                    buttonB: "Jetzt einkaufen"
                },
                {
                    Finishing: "Wir sind Edison",
                    img: [
                        { source: "TeslaErleben/Homepage-We-Are-Tesla-Desktop.webm", media: "(min-width: 900px) and (orientation: landscape)", type: "video/webm" },
                        { source: "TeslaErleben/Homepage-We-Are-Tesla-Desktop.webm", media: "(max-height: 599px) and (orientation: landscape)", type: "video/webm" },
                        { source: "TeslaErleben/Homepage-We-Are-Tesla-Desktop.webm", media: "(max-width: 599px) and (orientation: portrait)", type: "video/webm" },
                        { source: "TeslaErleben/Homepage-We-Are-Tesla-Desktop.webm", media: "(min-width: 900px) and (orientation: portrait)", type: "video/webm" }
                    ],
                    message:"",
                    buttonA: "Kommen sie zu Edison",
                    buttonB: null

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