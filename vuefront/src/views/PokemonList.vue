<template>
  <div>

     <div v-for="(item, index) in PokemonList " :key="index">
    <p>id: {{ item.id }}</p>
    <p>id: {{ item.name }}</p>
    <p>height: {{ item.height }}</p>
    <p>base experience: {{ item.base_experience }}</p>
    <p>weight: {{ item.weight }}</p>
    <!-- <p>{{ item.image }}</p> -->
<img :src="require(`@/assets/${item.image}`)">
     </div>
  </div>
  
</template>

<script>

import axios from 'axios'

export default {
    name: "PokemonApi",
data()
{
  return {
      Pokemon: {
      id: '',
      name: '',
      height: '',
      base_experience: '',
      weight: '',
      image: '',
    },
    PokemonList: [],
}
},

mounted () {
    axios
    .get('http://127.0.0.1:8000/api/pokemons')
    .then((response) => {
      this.PokemonList = response.data})
},

}
</script>

<style>

</style>