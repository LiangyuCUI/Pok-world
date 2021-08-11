<template>
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

  
</template>
<script>
// import Pokemondetail from "@/components/Pokemondetail.vue";
const Pokedex = require("pokeapi-js-wrapper");
const P = new Pokedex.Pokedex();
export default {
  name: "pokécardinfo",
 
  created() {
    this.getAllPokemon();
  },

  methods: {
    getAllPokemon() {
      P.getPokemonsList({ limit: 15 }).then((response) => {
        console.log(response);
        response.results.forEach((pokemon) => {
          P.getPokemonByName(pokemon.name).then((pokemonData) => {
            this.pokemonList.push(pokemonData);
          });
        });
      });
    },
    redirect() {
      this.$router.push({
        name: "Pokédex",
        params: {
          id: this.name,
          height: this.height,
          base_experience: this.base_experience,
          weight: this.weight,
        },
      });
    },
  },
  // components: { Pokemondetail },
};
</script>
<style>
/* body {
  background-image: url("../assets/jigglypuffbackground.jpg") !important;
  background-repeat: no-repeat;
   /* background-size: 1520px 155367px; */
/* background-size: cover;
} */
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