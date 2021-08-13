<template>
  <div>
    <div>
      {{ $route.params.content }}
    </div>
    <div class="details">
      <img
        :src="require(`@/assets/${$route.params.image}`)"
        width="150"
        height="150"
      />
      <h1>Id: {{ $route.params.id }}</h1>
      <h1>Name: {{ $route.params.name }}</h1>
      <h1>Height: {{ $route.params.height }}</h1>
      <h1>Base experience: {{ $route.params.base_experience }}</h1>
      <h1>Weight: {{ $route.params.weight }}</h1>
      <button
      class="back-button"
      style="background-color: #FF7F50"
      @click="$router.back()"
    >
      Back to home
    </button>
    </div>
    
<create-comment @create-new-comment="addcomments(content)" />

    <comment-card
      v-for="(item, index) in Comment"
      :key="index"
      :comments="item"
    />
  </div>
</template>
<script>
import CommentCard from "@/components/CommentCard.vue";
import CreateComment from "@/components/CreateComment.vue";
import axios from "axios";

export default {
  name: "Pokédex",
  components: {
    CommentCard,
    CreateComment,

  },
  data() {
    return {
      content: "",

      Comment: [],
    };
  },
  created() {
    this.getAllcomments();
  },

  methods: {
    getAllcomments() {
      axios
        .get(process.env.VUE_APP_ENDPOINT + "/api/comments/search/pokemons/" + this.$route.params.id )
        .then((response) => {
          // console.log(response);
          this.Comment = response.data;
          console.log(response.data);
        });
    },
    
     addcomments(content) {
      //  axios
      //   .post("http://127.0.0.1:8000/api/createcomment/", 


      //   )
      var data = JSON.stringify({
  content: content.content,
  pokemon_id: this.$route.params.id,
  
});

var config = {
  method: 'post',
  url: 'http://127.0.0.1:8000/api/createcomment',
  headers: { 
    Authorization: 'Bearer' + localStorage.getItem("token"), 
    'Content-Type': 'application/json',
    Accept: "*/*",
  },
  data : data
};



axios(config)
.then(function (response) {
  console.log(JSON.stringify(response.data));
})
.catch(function (error) {
  console.log(error);
});
     }   
     
    },
  };

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
