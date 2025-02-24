<template>
  <div ref="rootElement" class="fixed flex personalMsg justify-center text-center text-black w-[100%] z-50">
      <div class="flex py-1 text-lg">
          <p class="mx-6 text-xl">
              <span class="text-[0.85rem] font-medium">{{ message }}</span>
              <a href="" class="text-[0.67rem] mx-1 bg-black text-white rounded py-[7px] px-4 ">Beststnd erkunden</a>
          </p>
      </div>
  </div>
</template>

<script>
import enavbar from './navbar.vue';
export default {
    components: {
        enavbar
    },
  data(){
        return {
            divHeight: 0,
            message: "Model Y aus begrenztem Bestand verfügbar Ab 0,00% Zinssatz",
        };
    },
    mounted() {
        console.log("personalmsg wurde gemounted!");
    }
};
</script>