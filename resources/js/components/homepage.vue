
<template>
        <div class="block block-layout-builder relative z-0">
        <enavbar class="mt-12"></enavbar>
        <section>
            <div class="w-[100%]">
                <picture>
                    <source  v-for="(image, index) in models[0].img" :key="index" :srcset="assingi(models[0].img[index].source)" :media="models[0].img[index].media">
                    <img src="../../../public/storage/mainpagecontent/model-Y-2/Homepage-Model-Y-2-Desktop-EMEA-LHD.jpeg" alt="Model Y">
                </picture>
            </div>
        </section>
        
        <div class="w-[100%] h-[100%] absolute bottom-0 inset-0 flex justify-center my-9">
            <div class="inset-0 justify-centr h-screen relative flex justify-center mt-[125px]">
                <div class="text-center tracking-tighter">
                    <h1 class="text-white text-[69px] font-semibold">Das neue Model Y</h1>
                    <h3 class= "text-white font-semibold text-xl">Auslieferung beginnt im März</h3>
                </div>
            </div>  
        </div>
    </div>
</template>
<script>
import enavbar from './navbar.vue';
export default {
    data() {
        return {
            models:[
                {
                    model: "Model Y",
                    img: [
                    {source: "model-Y-2/Homepage-Model-Y-2-Desktop-EMEA-LHD.jpeg", media: "(min-width: 900px) and (orientation: landscape)"},
                    {source: "model-Y-2/Homepage-Model-Y-2-Mobile-EMEA-LHD.avif", media:"(max-height: 599px) and (orientation: landscape)"},
                    {source: "model-Y-2/Homepage-Model-Y-2-Mobile-EMEA-LHD.avif", media:"(max-width: 599px) and (orientation: portrait)"},
                    {source: "model-Y-2/Homepage-Model-Y-2-Tablet-EMEA-LHD.avif", media:"(min-width: 600px) and (orientation: portrait)"},
                    {source: "model-Y-2/Homepage-Model-Y-2-Desktop-EMEA-LHD.avif", media:"(min-width: 900px) and (orientation: portrait)"}
                    ]
                },
                {
                    model: "Model 3",
                    img: [
                    {desktop: "model-3/Homepage-Model-3-2-Desktop-EMEA-LHD.jpeg"},
                    {mobile: "model-3/Homepage-Model-3-2-Mobile-EMEA-LHD.avif"},
                    {tablet: "model-3/Homepage-Model-3-2-Tablet-EMEA-LHD.avif"},
                    {desktop: "model-3/Homepage-Model-3-2-Desktop-EMEA-LHD.avif"}
                    ]
                },
                {
                    model: "Model S",
                    img: [
                    {desktop: "model-S/Homepage-Model-S-2-Desktop-EMEA-LHD.jpeg"},
                    {mobile: "model-S/Homepage-Model-S-2-Mobile-EMEA-LHD.avif"},
                    {tablet: "model-S/Homepage-Model-S-2-Tablet-EMEA-LHD.avif"},
                    {desktop: "model-S/Homepage-Model-S-2-Desktop-EMEA-LHD.avif"}
                    ]
                },
                {
                    model: "Model X",
                    img: [
                    {desktop: "model-X/Homepage-Model-X-2-Desktop-EMEA-LHD.jpeg"},
                    {mobile: "model-X/Homepage-Model-X-2-Mobile-EMEA-LHD.avif"},
                    {tablet: "model-X/Homepage-Model-X-2-Tablet-EMEA-LHD.avif"},
                    {desktop: "model-X/Homepage-Model-X-2-Desktop-EMEA-LHD.avif"}
                    ]
                }	
            ],
            message: "Seien Sie unter den Ersten, die erfahren, wann unser aktualisiertes Model 3 für Probefahrten verfügbar ist.",
        };
    },
    methods: {
        assingi(rootdata){
            var rootdirect = "/storage/mainpagecontent/" + rootdata;
            return rootdirect;
        }
    }
};
</script>