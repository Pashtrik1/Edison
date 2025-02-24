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
            <div class="w-[100%] h-[100%] absolute inset-0 flex justify-center border-white">
                <div class="w-5/6 justify-center relative flex">
                    <div class="grid grid-row-2 text-center tracking-tighter w-[100%]">
                        <div class="grid grid-rows- items-center gap-y-1 h-[80px] sm:h-[100px] mt-[12%] sm:mt-[6%]">
                        </div>
                        <div class="flex justify-center items-end">
                            <div class="flex space-x-3 pb-6 w-[100%] justify-center">
                            </div>
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
