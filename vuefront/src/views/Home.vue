<template>
  <div class="home">
    <!-- <img class="img" alt="poke logo" src="../assets/pokelogo.png"> -->
    <HelloWorld id="msg" msg="welcome to pokéworld~~" />
  </div>
  <!-- <img alt="Home background" src="../assets/background.jpg"> -->
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
body {
  background-image: url("../assets/background.jpg");
  background-repeat: no-repeat;
   /* background-size: 1520px 155367px; */
   background-size: cover;
   height: 100%;
}
</style>