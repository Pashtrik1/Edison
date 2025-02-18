<template>
  <personalMsg></personalMsg>
</template>

<script>
import personalMsg from './components/personalmsg.vue';
export default {
  components:{
    personalMsg
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