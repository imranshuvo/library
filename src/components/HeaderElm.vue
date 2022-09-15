<template>
  <div class="bg-slate-600 text-white py-5">
    <div class="container mx-auto flex justify-between items-center">
        <h1 class="text-4xl"><router-link to="/">MyLibrary</router-link></h1>
		<ul class="list-none flex">
			<li class="mx-2"><router-link to="/books">Books</router-link></li>
			<li class="mx-2"><router-link to="/login">Login</router-link></li>
			<li class="mx-2"><a href="#" @click.prevent="signOut">Logout</a></li>
		</ul>
    </div>
    
  </div>
</template>

<script>
	import { getAuth, signOut } from "firebase/auth";

export default {
  name: "HeaderElm",
  created() {},
  data() {
    return {};
  },
  props: {},
  methods: {
	signOut(){
		const auth = getAuth();
		signOut(auth).then(() => {
		// Sign-out successful.
		console.log('signed out');
		this.$router.push('/login');
		
		}).catch((error) => {
		// An error happened.
		console.log(error);
		});
	}
  },
};
</script>

<style scoped>
	.router-link-active  {
		text-decoration: underline;
	}
</style>