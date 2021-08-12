<template>
  <div>
<h2>{{ comments.content }}</h2>

  </div>
</template>

<script>
export default {
  name: "CommentCard",
  props: {
    comments: Object,
  },
}
</script>

<style>

</style>