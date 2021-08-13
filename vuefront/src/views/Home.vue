<template>
<div>
  <div class="home">
    <img class="homelogo" src="../assets/pikachu.png" height="150">
    <a href="https://fontmeme.com/pokemon-font/"><img src="https://fontmeme.com/permalink/210806/c0ac114dbb6ddb6b4e15613ccc1a561e.png" alt="pokemon-font" border="0"></a>
      </div>
      <div>
     <PokemonCard
     v-for="(item, index) in PokemonList" :key="index" class="pokécard" :pokemons="item"
     />

 </div>
 </div>
</template>

<script>

import PokemonCard from "@/components/PokemonCard.vue";
import axios from 'axios';

export default {
  name: "Home",
  components: {
    PokemonCard,
  },
    data() {
    return {
      PokemonList: [],
    };
  },

  created () {
    this.getAllPokemons();
  },
  methods: {
getAllPokemons() {
    axios
    .get(process.env.VUE_APP_ENDPOINT + "/api/pokemons").then((response) => {
      this.PokemonList = response.data
    });
  },
  }
};
</script>
<style>

</style>