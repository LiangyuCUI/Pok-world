<template>
  <div>
    <div class="pokétitle">
      <a
        ><img
          src="https://fontmeme.com/permalink/210807/fc49a4d2be3e83b1f433575dc5b371a9.png"
          alt="pokemon-font"
          border="0"
      /></a>
      <input
        type="text"
        placeholder="Search your pokécard"
        style="float: right"
      />
      <span
        class="searchbutton"
        type="button"
        title="Click me to search"
        style="float: right"
        ><img src=../assets/puff.png height="42"/></span
      >
    </div>

    <div v-for="(item, index) in pokemonList" :key="index" class="pokécard">
      <h3>{{ item.name }}</h3>
      <img :src="item.sprites.front_default" width="120" height="120" />
      <img :src="item.sprites.back_default" width="120" height="120" />
      <p>Pokédex: {{ item.id }}</p>
      <p>height: {{ item.height }}dm</p>
      <p>base experience: {{ item.base_experience }}XP</p>
      <p>weight: {{ item.weight }}</p>
      <button style="float: right" class="pokedetails" v-on:click="redirect()">
        Details
      </button>
    </div>
  </div>
</template>

<script>
// import Pokemondetail from "@/components/Pokemondetail.vue";
const Pokedex = require("pokeapi-js-wrapper");
const P = new Pokedex.Pokedex();
export default {
  name: "pokécard",
  data: function () {
    return {
      pokemonList: [],
    };
  },

  created() {
    this.getAllPokemon();
  },

  methods: {
    getAllPokemon() {
      P.getPokemonsList({ limit: 151 }).then((response) => {
        console.log(response);
        response.results.forEach((pokemon) => {
          P.getPokemonByName(pokemon.name).then((pokemonData) => {
            this.pokemonList.push(pokemonData);
          });
        });
      });
    },
  },
  // components: { Pokemondetail },
};
</script>
<style>

.pokétitle {
  margin-left: auto;
  margin-right: auto;
  display: block;
}
.pokécard {
  display: inline-block;
  height: 23em;
  width: 17em;
  padding: 1em;
  background: white;
  margin: 1em;
  border-radius: 1.5em;
  box-shadow: 5px 5px 7px rgba(33, 33, 33, 0.7);
  transition: transform 0.15s linear;
  margin: 1em;
  flex-wrap: wrap;
  overflow-wrap: break-word;
  overflow: hidden;
}
.pokécard:hover,
.pokécard:focus {
  box-shadow: 8px 8px 5px rgba(0, 0, 0, 0.7);
  transform: scale(1.11);
}
</style>

