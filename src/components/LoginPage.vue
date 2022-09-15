<template>
<div class="container mx-auto">
	<h1 class="text-4xl my-6">Login</h1>
	<form @submit.prevent="authenticateUser">
		<div>
			<input type="text" class="border border-slate-500 p-4 w-1/4" v-model="email" placeholder="Username">
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
	import { getAuth, signInWithEmailAndPassword } from "firebase/auth";


export default {
  name: "LoginPage",
  created() {},
  data() {
    return {
		email: '',
		password: ''
	};
  },
  props: {},
  methods: {
	authenticateUser(){
		const auth = getAuth();
		signInWithEmailAndPassword(auth, this.email, this.password)
		.then((userCredential) => {
			// Signed in 
			const user = userCredential.user;
			// ...
			console.log(user);

			this.$router.push('/dashboard');
		})
		.catch((error) => {
			const errorCode = error.code;
			const errorMessage = error.message;
			// ..
			console.log(errorCode + ' ' + errorMessage);
			alert(errorMessage);
		});
		
	}
  },
};
</script>

<style lang="scss" scoped></style>