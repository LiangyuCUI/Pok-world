<template>
<div>
  <div id="nav">
    <a style="float: left"
      ><img
        src="https://fontmeme.com/permalink/210803/beb1da639c858a878f09524212c0da73.png"
        alt="pokemon-font"
        border="0"
    /></a>
    <router-link to="/" class="homerouter">Home</router-link> |
    <router-link to="/pokécard">Pokécard</router-link> |
    <router-link to="/pokédex">Pokédex</router-link> |
    <router-link to="/about">About</router-link>
    <button @click="goToLogin()" class="button" style="float: right">Login</button>
    <button @click="goToSignup()" class="button" style="float: right">
      Signup
    </button>
  </div>
  <router-view />
  </div>
</template>

<script>
export default {
  name: 'navbar',
  methods:{
       goToSignup(){
   this.$router.push('/signup');
       },
       goToLogin(){
   this.$router.push('/login'); 
      }
}
};
</script>

<style scoped>
#nav {
  font-family:  Verdana;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}

#nav {
  padding: 20px;
}

#nav a {
  font-weight: bold;
  color: #2c3e50;
}

#nav a.router-link-exact-active {
  color: #f7f709;
}
#nav {
  background-color: rgba(247, 7, 7, 0.678);
  text-align: center;
  font-family: cursive;
}
.homerouter {
  font-size: 1em;
}
.button {
  color: #fff !important;
  /* text-transform: uppercase; */
  text-decoration: none;
  background: #6d200d;
  padding: 12px;
  border-radius: 50px;
  display: inline-block;
  border: none;
  transition: all 0.4s ease 0s;
}
.button:hover {
  text-shadow: 0px 0px 12px rgba(255, 255, 255, 1);
  box-shadow: 0px 5px 40px -10px rgba(0, 0, 0, 0.57);
  box-shadow: 0px 5px 40px -10px rgba(0, 0, 0, 0.57);
  transition: all 0.4s ease 0s;
}

</style>
