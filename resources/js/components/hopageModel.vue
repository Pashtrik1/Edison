<template>
        <div class="relative z-0 max-h-[855px] overflow-hidden">
        <section class="relative z-0">
            <div class="w-[100%] h-[855px] overflow-hidden ">
                <picture>
                    <source type="image/webp" v-for="(image, index) in models[1].img" :key="index" :srcset="assingi(models[1].img[index].source)" :media="models[1].img[index].media">
                    <img src="../../../public/storage/mainpagecontent/model-3/Homepage-Model-3-Desktop-US.jpeg" alt="Model 3" class="w-full h-auto max-h-[855px] object-cover object-[70%_30%]" >
                </picture>
            </div>
        </section>
        <div class="w-[100%] h-[100%] absolute bottom-0 inset-0 flex justify-center my-9">
            <div class="inset-0 justify-center h-screen relative flex mt-[95px]">
                <div class="text-center tracking-tighter">
                    <h1 class="text-white text-[55px] font-semibold leading-none pb-1">{{ models[0].model }}</h1>
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
        models: {
            type: Object,
            required: true
        }
    }
}
</script>