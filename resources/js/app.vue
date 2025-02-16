<template>
    <div v-if="show" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50">
      <div class="bg-white p-6 rounded-lg shadow-lg w-96">
        <h2 class="text-xl font-bold mb-4">Popup Title</h2>
        <p>This is a simple popup modal in Vue and Blade.</p>
        <button @click="closePopup" class="mt-4 px-4 py-2 bg-red-500 text-white rounded">Close</button>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    props: ['visible'],
    data() {
      return {
        show: this.visible,
      };
    },
    watch: {
      visible(newVal) {
        this.show = newVal;
      }
    },
    methods: {
      closePopup() {
        this.show = false;
        this.$emit('update:visible', false);
      }
    }
  };
  </script>
  
  <style scoped>
  /* Add more styles if needed */
  </style>