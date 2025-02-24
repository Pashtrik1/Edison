<template>
        <div class="relative z-0 overflow-hidden">
            <section class="relative z-0">
                <div class="w-[100%] max-h-[855px] overflow-hidden">
                    <picture v-if="modeli.mediaType == image">
                        <source v-for="(img, index) in modeli.img" :key="index" :srcset="assingi(img.source)" :media="img.media">
                        <img :src=assingi(modeli.img[0].source) alt="Model 3" class="w-full object-cover object-[55%_45%]" :style="{ height: computedHeight }">
                    </picture>
                    <video v-if="modeli.mediaType == video" autoplay muted loop playsinline class="w-full object-cover object-center" :style="{ height: computedHeight }">
                        <source v-for="(img, index) in modeli.img" :key="index" :srcset="assingi(img.source)" :src="assingi(img.source)" :type="img.type">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </section>
            <div class="w-[100%] h-[100%] absolute inset-0 flex justify-center border-white">
                <div class="w-5/6 justify-center relative flex">
                    <div class="grid grid-row-2 text-center tracking-tighter w-[100%]">
                        <div class="grid grid-rows- items-center gap-y-1 h-[80px] sm:h-[100px] mt-[12%] sm:mt-[6%]">
                            <h1 class="text-white text-5xl sm:text-6xl font-semibold leading-none">{{ modeli.model }}</h1>
                            <h3 class="text-white font-semibold text-lg sm:text-2xl ">{{ modeli.message }}</h3>
                        </div>
                        <div class="flex justify-center items-end">
                            <div class="flex space-x-3 pb-6 w-[100%] justify-center">
                                <button class="w-[50%] max-w-[255px] min-w-[100px] h-10 text-white bg-blue-600 hover:bg-blue-800 font-semibold rounded text-sm px-6 focus:outline-none transition-all duration-200 ease-in-out"
                                    v-if="modeli.buttonB != null">
                                    {{ modeli.buttonB }}
                                </button>
                                <button class="w-[50%] max-w-[255px] min-w-[100px] h-10 text-black bg-white hover:bg-gray-200 font-semibold rounded text-sm px-6  focus:outline-none transition-all duration-200 ease-in-out"
                                    v-if="modeli.buttonA != null">
                                    {{ modeli.buttonA }}
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</template>
<script>
export default {
    data(){
        return{
            image: "image",
            video: "video"
        }
    },
    props: {
        modeli: Object,
    },
    methods: {
        assingi(rootdata) {
            var rootdirect = "/storage/mainpagecontent/" + rootdata;
            return rootdirect;
        }
    },
    computed: {
            computedHeight() {
            return `calc(97svh - 48px)`;
        }
    }
}
</script>