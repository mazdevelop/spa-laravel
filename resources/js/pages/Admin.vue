<template>
  <div>
    <spa-header></spa-header>
    <router-view></router-view>
  </div>
</template>

<script>
import Header from "../components/Header.vue";
export default {
  components: {
    spaHeader: Header,
  },
};
</script>

<style>
</style>