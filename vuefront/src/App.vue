<template>
<div class="app">
<navbar/>
</div>
</template>

<script>
import navbar from './components/navbar.vue';
export default {
  components: { navbar },
  name: 'App',
};
</script>

<style>
.app{
font-family:  Verdana;
 text-align: center;
}
body{
background-color: rgb(224, 232, 250);
}
</style>