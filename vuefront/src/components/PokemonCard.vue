<template>
  <div>
    <div v-for="(item, index) in PokemonList" :key="index" class="pokécard">
      <button @click="goToPokedex()">Comment</button>
      <img :src="require(`@/assets/${item.image}`)" width="150" height="150" />
      <p>name: {{ item.name }}</p>
      <p>height: {{ item.height }}</p>
      <p>base experience: {{ item.base_experience }}</p>
      <p>weight: {{ item.weight }}</p>
    </div>
  </div>
</template>

<script>
import axios from "axios";

export default {
  name: "PokemonApi",
  data() {
    return {
      Pokemon: {
        id: "",
        name: "",
        height: "",
        base_experience: "",
        weight: "",
        image: "",
      },
      PokemonList: [],
    };
  },

  mounted() {
    axios.get("http://127.0.0.1:8000/api/pokemons").then((response) => {
      this.PokemonList = response.data;
    });
  },

  methods: {
    goToPokedex() {
      this.$router.push("/pokédex");
    },
  },
};
</script>

<style>
.pokécard {
  display: inline-block;
  height: 20em;
  width: 15em;
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