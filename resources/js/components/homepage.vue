<template>
        <div class="block block-layout-builder ">
        <section>
            <div class="w-[100%]">
                <picture>
                    <source srcset="" media="(min-width: 900px) and (orientation: landscape)">
                    <source srcset="../../..public/storage/mainpagecontent/model-Y-2/Homepage-Model-Y-2-Mobile-EMEA-LHD.avif" media="(max-height: 599px) and (orientation: landscape)">
                    <source srcset="../../../public/storage/mainpagecontent/model-Y-2/Homepage-Model-Y-2-Mobile-EMEA-LHD.avif" media="(max-width: 599px) and (orientation: portrait)">
                    <source srcset="../../../public/storage/mainpagecontent/model-Y-2/Homepage-Model-Y-2-Tablet-EMEA-LHD.avif" media="(min-width: 600px) and (orientation: portrait)">
                    <source srcset="../../../public/storage/mainpagecontent/model-Y-2/Homepage-Model-Y-2-Desktop-EMEA-LHD.avif" media="(min-width: 900px) and (orientation: portrait)">
                    <img src="../../../public/storage/mainpagecontent/model-Y-2/Homepage-Model-Y-2-Desktop-EMEA-LHD.jpeg" alt="Model Y">
                </picture>
            </div>
            <div class="w-[100%]" v-for="(image, index) in models[0].img" :key="index">hello!</div>
        </section>
        
        <div class="absolute inset-0 flex items-center justify-center h-screen">
            <div class="text-center">
                <h1 class="text-4xl font-bold text-white">Das neue Model Y</h1>
                <p class="text-lg">Order Online for Touchless Delivery</p>
            </div>
        </div>  
    </div>
</template>
<script>
export default {
    data() {
        return {
            models:[
                {
                    model: "Model Y",
                    img: [
                    {desktop: "model-Y-2/Homepage-Model-Y-2-Desktop-EMEA-LHD.jpeg"},
                    {mobile: "model-Y-2/Homepage-Model-Y-2-Mobile-EMEA-LHD.avif"},
                    {tablet: "model-Y-2/Homepage-Model-Y-2-Tablet-EMEA-LHD.avif"},
                    {desktop: "model-Y-2/Homepage-Model-Y-2-Desktop-EMEA-LHD.avif"}
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
            var rootdirect = "../../../public/storage/mainpagecontent/" + rootdata;
            return rootdirect;
        }
    }
};
</script>