<template>
  <div>
<h6>{{ comments.content }}</h6>

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