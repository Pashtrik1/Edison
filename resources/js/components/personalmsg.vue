<template>
  <div ref="rootElement" class="fixed flex bg-gradient-to-r from-gray-900 to-gray-700 justify-center text-center text-white w-[100%] z-30">
      <div class="flex pb-3 pt-2 text-lg">
          <p class="mx-6 text-xl">
              <span class="font-bold px-2">Updates erhalten</span>
              <span class="text-[0.95rem] font-medium">{{ message }}</span>
              <span class="inline-block underline ms-2 text-[0.955rem] cursor-pointer">Melden Sie sich an</span>
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
            message: "Seien Sie unter den Ersten, die erfahren, wann unser aktualisiertes Model 3 für Probefahrten verfügbar ist.",
        };
    },
    mounted() {
        console.log("personalmsg wurde gemounted!");
    }
};
</script>