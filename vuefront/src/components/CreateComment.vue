<template>
  <div class="Create-Comment">
    <h3>Comments</h3>
    <form @submit.prevent="createComment">
      <input class="form-control-lg" type="text" v-model="newComment.content" /><br>
      <button type="submit" class="btn btn-success">Add Comment</button>
    </form>
  </div>
</template>

<script>
export default {
  name: "Create-Comment",
  data: function () {
    return {
      newComment: {
        content: "",
       
      },
    };
  },
  methods: {
    createComment() {
      this.$emit("create-new-comment", this.newComment);
      this.newComment = {};
    },
  },
};
</script>

<style>
</style>