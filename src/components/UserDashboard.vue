<template>
  <div>
    Welcome, {{ email }}
  </div>
</template>

<script>
import { getAuth, onAuthStateChanged } from "firebase/auth";

export default {
  name: "UserDashboard",
  created() {},
  data() {
    return {
      isLoggedIn: true,
      email: '',
      user: this.getUser()
    };
  },
  methods: {
    getUser(){
      const auth = getAuth();
      onAuthStateChanged(auth, (user) => {
          this.user = user;
          this.email = this.user.email;
          console.log(this.user);
      })
    }
  },
  watch: {
    user(){
      
    }
  }
  
};
</script>

<style scoped></style>