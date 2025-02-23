<template>
    <div class="block block-layout-builder">
        <div class="relative z-0 max-h-[855px] overflow-hidden">
            <section class="relative z-0">
                <div class="w-[100%] h-[855px] overflow-hidden ">
                    <picture>
                        <source :srcset="assingi(modeli.img[0].source)" :media="modeli.img[0].media">
                        <img src="../../../public/storage/mainpagecontent/model-Y/Homepage-Model-Y-Global-Desktop.jpeg" alt="Model 3" class="w-full h-auto max-h-[855px] object-cover object-[70%_30%]" >
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
    }
}
</script>