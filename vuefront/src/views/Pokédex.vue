<template>
  <div class="details">
    <Pokemondetail
      :id="id"
      :height="height"
      :base_experience="base_experience"
      :weight="weight"
    ></Pokemondetail>
    <h1>{{ $route.params.id }}</h1>
    <h1>{{ $route.params.height }}</h1>
    <h1>{{ $route.params.base_experience }}</h1>
    <h1>{{ $route.params.weight }}</h1>
    <a href="http://localhost:8080/pok%C3%A9card">
      <button
        class="back-button"
        style="background-color: #ff7f50"
        @click="$router.go(-1)"
      >
        Back to my pokécards
      </button></a
    >

    <div class="pokédex">
      <!-- <pokemondetail /> -->
    </div>
  </div>
</template>
<script>
import Pokemondetail from "@/components/Pokemondetail.vue";
export default {
  name: "pokécard",
  components: { Pokemondetail },
};
</script>
<style>
.details {
  text-decoration: none;
  color: #000;
  background: rgb(247, 234, 243);
  display: inline-block;
  height: 20em;
  width: 20em;
  padding: 1em;
  box-shadow: 5px 5px 7px rgba(33, 33, 33, 0.7);
  transition: transform 0.15s linear;
  margin: 1em;
  flex-wrap: wrap;
  overflow-wrap: break-word;
}
.details:hover,
.details:focus {
  box-shadow: 10px 10px 7px rgba(0, 0, 0, 0.7);
  transform: scale(1.25);
  position: relative;
  z-index: 5;
}
</style>
