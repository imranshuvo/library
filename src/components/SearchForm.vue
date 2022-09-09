<!-- eslint-disable no-mixed-spaces-and-tabs -->
<template>
  	<div>
		<form @keyup.prevent="searchBooks">
			<input 
				type="text" 
				v-model="search" 
				placeholder="Search for books here"
				class="border p-4 w-1/3 my-8 border-slate-500">
		</form>
  	</div>
</template>

<script>
export default {
  name: "SearchForm",
  created() {},
  data() {
    return {};
  },
  props: {},
  methods: {},
};
</script>

<style lang="scss" scoped></style>