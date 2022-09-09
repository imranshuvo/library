<template>
<div class="container mx-auto">
	<h1 class="text-4xl my-6">Login</h1>
	<form @submit.prevent="authenticateUser">
		<div>
			<input type="text" class="border border-slate-500 p-4 w-1/4" v-model="username" placeholder="Username">
		</div>
		<div>
			<input type="password" class="border border-slate-500 p-4 w-1/4 my-4" v-model="password" placeholder="Password">
		</div>
		<div>
			<button type="submit" class="bg-slate-500 p-4 text-xl w-1/4 text-white">Login</button>
		</div>
	</form>
</div>
</template>

<script>
export default {
  name: "LoginPage",
  created() {},
  data() {
    return {
		username: '',
		password: ''
	};
  },
  props: {},
  methods: {
	authenticateUser(){
		const user = this.username;
		const pass = this.password;
		console.log(user + pass);
		
	}
  },
};
</script>

<style lang="scss" scoped></style>