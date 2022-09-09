<template>
  <header-elm></header-elm>
  <search-form></search-form>
  <book-result></book-result>
  <footer-elm></footer-elm>
</template>

<script>
  import HeaderElm from './components/HeaderElm.vue';
  import SearchForm from './components/SearchForm.vue';

export default {
  name: 'App',
  components: {
    SearchForm,
    HeaderElm
  }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
}
</style>
