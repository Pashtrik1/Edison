<template>
        <div class="relative z-0 overflow-hidden">
            <section class="relative z-0">
                <div class="w-[100%] max-h-[855px] overflow-hidden">
                    <picture>
                        <source v-for="(img, index) in modeli.img" :key="index" :srcset="assingi(img.source)" :media="img.media">
                        <img :src=assingi(modeli.img[0].source) alt="Model 3" class="w-full object-cover object-[55%_45%]" :style="{ height: computedHeight }">
                    </picture>
                </div>
            </section>
            <div class="w-[100%] h-[100%] absolute bottom-0 inset-0 flex justify-center my-9">
                <div class="inset-0 justify-center h-screen relative flex mt-[95px]">
                    <div class="text-center tracking-tighter">
                        <h1 class="text-white text-[55px] font-semibold leading-none pb-1">{{ modeli.model }}</h1>
                        <div class="flex justify-center mt-4">
                            
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