<template>
  <div>
    <div>
      <button @click="redirect()">Details</button>
      <img :src="require(`@/assets/${pokemons.image}`)" width="150" height="150" />
      <p>Id: {{ pokemons.id }}</p>
      <p>Name: {{ pokemons.name }}</p>
      <!-- <p>height: {{ pokemons.height }}</p>
      <p>base experience: {{ pokemons.base_experience }}</p>
      <p>weight: {{ pokemons.weight }}</p> -->
    </div>
  </div>
</template>

<script>

export default {
  name: "PokemonCard",
  props: {
    pokemons: Object,
  },

  methods: {
    redirect() {
    this.$router.push({
        name: "Pokédex",
        params: {
          id: this.pokemons.id,
          name: this.pokemons.name,
          height: this.pokemons.height,
          base_experience: this.pokemons.base_experience,
          weight: this.pokemons.weight,
          image: this.pokemons.image,
        },
      });

    },
  },
};
</script>

<style>
.pokécard {
  display: inline-block;
  height: 15em;
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