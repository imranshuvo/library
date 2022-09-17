<template>
  <header-elm :isLoggedIn="isLoggedIn"></header-elm>
  <router-view></router-view>
</template>

<script>
import HeaderElm from "./components/HeaderElm.vue";

export default {
  name: "App",
  components: {
    HeaderElm,
  },
  data() {
    return {};
  },
  method: {},
};
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
}
</style>
