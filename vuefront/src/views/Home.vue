<template>
  <div class="home">
    <HelloWorld/>
    <signupstyle/>
    <a href="https://fontmeme.com/pokemon-font/"><img src="https://fontmeme.com/permalink/210806/c0ac114dbb6ddb6b4e15613ccc1a561e.png" alt="pokemon-font" border="0"></a>
    <img class="homelogo" src="../assets/pikachu.png">
  </div>
</template>

<script>
// @ is an alias to /src
import HelloWorld from "@/components/HelloWorld.vue";
export default {
  name: "Home",
  components: {
    HelloWorld,
  },
};
</script>
<style>
/* body {
  background-image:url("../assets/background.jpg");
  background-repeat: no-repeat;
  background-size: cover;
  background-size:100%;
}  */
body{
  background-color:#e7f2fc;
  background-position: center;
}
.home{
  color:white;
}
.homelogo{
  height:135px;
}
</style>