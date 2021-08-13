<template>
  <div>
<h4 class="commentstyle">{{ comments.content }}</h4>

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

.commentstyle {
max-width: 380px;
margin: 15px auto;
border-radius: 1.5em;
background: white;
border-radius: 4px;
padding: 10px;
}

</style>