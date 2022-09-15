<!-- eslint-disable no-mixed-spaces-and-tabs -->
<template>
  	<div>
		<form @submit.prevent="">
			<input 
				type="text" 
				v-model="search" 
				placeholder="Search for books here"
				class="border p-4 w-1/3 my-8 border-slate-500"
				@keyup="searchBook">
		</form>
  	</div>
</template>

<script>
export default {
  name: "SearchForm",
  created() {},
  data() {
    return {
		search: ''
	};
  },
  props: {},
  methods: {
	searchBook(){
		setTimeout(function(){

		}, 500);
	}
  },
};
</script>

<style lang="scss" scoped></style>