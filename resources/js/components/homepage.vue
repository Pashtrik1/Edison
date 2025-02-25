<template>
    <personalmsg ref="bannerRef"></personalmsg>
    <div  class="relative z-0 overflow-hidden" :style="{ paddingTop: bannerHeight + 'px' }">

        <enavbar></enavbar>
            <section class="relative z-0">
                <div class="w-[100%] h-screen overflow-hidden">
                    <picture>
                        <source v-for="(image, index) in models[0].img" :key="index" :srcset="assingi(models[0].img[index].source)" :media="models[0].img[index].media">
                        <img :src=assingi(models[0].img[0].source) alt="Model 3" class="w-full h-screen object-cover object-[55%_45%]" :style="{ height: computedHeight }">
                    </picture>
                </div>
            </section>
        <!-- Text über dem Bild -->
        <div class="w-[100%] max-h-[855px] overflow-hidden absolute bottom-0 inset-0 flex justify-center my-9">
            <div class="inset-0 justify-center h-screen relative flex mt-[132px]">
                <div class="grid grid-row-2 text-center tracking-tighter w-[100%]">
                    <div class="grid grid-rows-  gap-y-1 h-[80px] sm:h-[100px]">
                        <!--Start of row-->
                        <h1 class="text-white sm:text-[69px] text-5xl font-semibold leading-none pb-1">Das neue Model Y</h1>
                        <h3 class="text-white font-semibold sm:text-2xl text-xl">Auslieferungen beginnen im März</h3>
                        <div class="flex justify-center items-start">
                            <!--Button A AND B-->
                            <div class="flex space-x-3 pb-6 w-[100%] justify-center py-1">
                                <button class="w-[50%] max-w-[255px] min-w-[100px] h-10 text-white bg-blue-600 hover:bg-blue-800 font-semibold rounded text-sm px-6 focus:outline-none transition-all duration-200 ease-in-out">
                                    {{ models[0].buttonA }}
                                </button>
                                <button class="w-[50%] max-w-[255px] min-w-[100px] h-10 text-black bg-white hover:bg-gray-200 font-semibold rounded text-sm px-6  focus:outline-none transition-all duration-200 ease-in-out">
                                    {{ models[0].buttonB }}
                                </button>
                            </div>
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


//images
import modelY2 from '@/assets/mainpagecontent/model-Y-2/Homepage-Model-Y-2-Desktop-EMEA-LHD.jpeg';
import modelY2Mobile from '@/assets/mainpagecontent/model-Y-2/Homepage-Model-Y-2-Mobile-EMEA-LHD.avif';
import modelY2Mobile2 from '@/assets/mainpagecontent/model-Y-2/Homepage-Model-Y-2-Mobile-EMEA-LHD.avif';
import modelY2Tablet from '@/assets/mainpagecontent/model-Y-2/Homepage-Model-Y-2-Tablet-EMEA-LHD.avif';
import modelY2Desktop from '@/assets/mainpagecontent/model-Y-2/Homepage-Model-Y-2-Desktop-EMEA-LHD.avif';

import modelY from '@/assets/mainpagecontent/model-Y/Homepage-Model-Y-Global-Desktop.jpeg';
import modelYMobile from '@/assets/mainpagecontent/model-Y/Homepage-Model-Y-Mobile-EMEA-LHD-v3.avif';

import model3 from '@/assets/mainpagecontent/model-3/Homepage-Model-3-Desktop-US.jpeg';
import model3Mobile from '@/assets/mainpagecontent/model-3/Homepage-Model-3-Mobile-US.avif';

import modelS from '@/assets/mainpagecontent/model-S/Homepage-Model-S-Desktop-US.avif';
import modelSMobile from '@/assets/mainpagecontent/model-S/Homepage-Model-S-Mobile-US.avif';

import modelX from '@/assets/mainpagecontent/model-X/Homepage-Model-X-Desktop-US.avif';
import modelXMobile from '@/assets/mainpagecontent/model-X/Homepage-Model-X-Mobile-US.avif';

import edison from '@/assets/mainpagecontent/TeslaErleben/Homepage-Demo-Drive-Desktop-NA.webm';
import powerwall from '@/assets/mainpagecontent/powerwall/Homepage-Powerwall-3-Desktop-ROW.avif';
import accessories from '@/assets/mainpagecontent/additional/Homepage-Accessories-Desktop-EMEA-v2.jpg';
import accessoriesMobile from '@/assets/mainpagecontent/additional/Homepage-Accessories-Mobile-EMEA-v2.jpg';

import weAreTesla from '@/assets/mainpagecontent/TeslaErleben/Homepage-We-Are-Tesla-Desktop.webm';


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
            window.addEventListener("resize", this.updateHeight);
        });
        

        return {
            bannerRef,
            bannerHeight,
        };
    },

    data() {
        return {
            windowHeight: window.innerHeight,
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
                        { source: "model-Y-2/Homepage-Model-Y-2-Desktop-EMEA-LHD.avif", media: "(min-width: 900px) and (orientation: landscape)" }
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