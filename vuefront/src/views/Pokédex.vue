<template>
  <div class="details">

    <img :src="require(`@/assets/${$route.params.image}`)" width="150" height="150" />
    <!-- <h1>Id: {{ $route.params.id }}</h1> -->
    <h1>Name: {{ $route.params.name }}</h1>
    <h1>Height: {{ $route.params.height }}</h1>
    <h1>Base experience: {{ $route.params.base_experience }}</h1>
    <h1>Weight: {{ $route.params.weight }}</h1>
    
  </div>
</template>
<script>

export default {

}
</script>

<style>
.details {
  display: inline-block;
  height: 30em;
  width: 40em;
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

</style>
