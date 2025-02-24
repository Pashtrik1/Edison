<template>
        <div class="relative z-0 overflow-hidden">
            <section class="relative z-0">
                <div class="w-[100%] max-h-[865px] overflow-hidden">
                    <video autoplay muted loop playsinline class="w-full object-cover object-center" :style="{ height: computedHeight }">
                        <source v-for="(img, index) in modeli.img" :key="index" :srcset="assingi(img.source)" :src="assingi(img.source)" :type="img.type">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </section>
            <div class="w-[100%] h-[100%] absolute inset-0 items-center border-white grid sm:grid-rows-5 col-rows-3">
                <div class="w-2/3 pb-10 mx-[45px] sm:row-start-4 sm:row-end-5 row-start-4 row-end-5">
                    <div class="w-full">
                        <div class="sm:text-4xl text-2xl text-white font-semibold">Wir sind Edison</div>
                    </div>
                    <div class="w-full">
                        <div class="pt-3 text-sm max-w-[255px]">
                            <div class="bg-white rounded text-[17px] sm:text-sm font-semibold max-w-[205px] flex justify-center items-center py-2">Kommen sie zu Edison</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</template>
<script>
export default {
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
