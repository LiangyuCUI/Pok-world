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
font-family: Bradley Hand, cursive;
 text-align: center;
}
</style>