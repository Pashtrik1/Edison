<template>
  <homepage></homepage>
</template>

<script>
import Homepage from './components/homepage.vue';
import hompage from './components/homepage.vue';

export default {
  components:{
    hompage
  },
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