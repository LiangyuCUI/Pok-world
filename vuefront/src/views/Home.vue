<template>
  <div class="home">
    <HelloWorld/>
    <a href="https://fontmeme.com/pokemon-font/"><img src="https://fontmeme.com/permalink/210806/c0ac114dbb6ddb6b4e15613ccc1a561e.png" alt="pokemon-font" border="0"></a>
    <img class="homelogo" src="../assets/pikachu.png" height="150">
     <PokemonCard/>
  </div>
</template>

<script>

import HelloWorld from "@/components/HelloWorld.vue";
import PokemonCard from "@/components/PokemonCard.vue";

export default {
  name: "Home",
  components: {
    HelloWorld,
    PokemonCard,
  },
};
</script>
<style>

</style>