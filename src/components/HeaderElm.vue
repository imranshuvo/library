<template>
  <div class="bg-slate-600 text-white py-5">
    <div class="container mx-auto flex justify-between items-center">
        <h1 class="text-4xl"><router-link to="/">MyLibrary</router-link></h1>
		<ul class="list-none flex">
			<li class="mx-2"><router-link to="/books">Books</router-link></li>
			<li class="mx-2"><router-link to="/login">Login</router-link></li>
		</ul>
    </div>
    
  </div>
</template>

<script>
export default {
  name: "HeaderElm",
  created() {},
  data() {
    return {};
  },
  props: {},
  methods: {},
};
</script>

<style lang="scss" scoped></style>