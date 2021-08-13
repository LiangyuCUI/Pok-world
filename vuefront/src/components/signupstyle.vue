<template>
  <div>
    <h1>SIGNUP</h1>
    <form @submit="createUser($event)">
        <p v-if="errors.length">
    <b>Please correct the following error(s):</b>
    <ul>
      <li v-for="error in errors" :key=error>{{ error }}</li>
    </ul>
  </p>
      <div class="form-body">
        <div class="name">
          <label for="name" class="label-title">Name : </label>
          <input
            v-model="name"
            type="text"
            id="name"
            class="form-input"
            required="required"
          />
        </div>
        <div class="email">
          <label for="email" class="label-title">Email : </label>
          <input
            v-model="email"
            type="email"
            id="email"
            class="form-input"
            required="required"
          />
        </div>
        <div class="password">
          <label for="password" class="label-title">Password : </label>
          <input
            v-model="password"
            type="password"
            id="password"
            class="form-input"
            placeholder="enter your password"
            required="required"
          />
        </div>
        <div class="confirmpassword">
          <label for="password_confirmation" class="label-title"
            >Confirm Password:
          </label>
          <input
            v-model="password_confirmation"
            type="password"
            class="form-input"
            id="password_confirmation"
            required="required"
          />
        </div>
        <div class="birthdate">
          <label for="birthdate" class="label-title">Birthdate : </label>
          <input v-model="birthdate" type="date" />
        </div>
        <!-- <button class="button button-block">signup</button> -->
        <span @click="createUser" class="signupbutton" type="submit"
          ><img src=../assets/pokeball.png height="35"/></span
        >
        <span class="clearButton" type="button">&#10060;</span>
      </div>
    </form>
  </div>
</template>

<script>
import axios from "axios";

export default {
  name: "signupstyle",
  data() {
    return {
      errors: [],
      name: null,
      email: null,
      password: null,
      password_confirmation: null,
      birthdate: null,
    };
  },

  methods: {
    createUser: function (e) {
      this.checkForm(e);
      axios
        .post(process.env.VUE_APP_ENDPOINT + "/api/auth/register", {
          name: this.name,
          email: this.email,
          password: this.password,
          password_confirmation: this.password_confirmation,
          birthdate: this.birthdate,
        })

        .then((response) => {
          response.data;
        });
    },
    checkForm: function (e) {
      if (
        this.name &&
        this.email &&
        this.password &&
        this.password_confirmation &&
        this.birthdate
      ) {
        return true;
      }

      this.errors = [];


  axios
  .post(process.env.VUE_APP_ENDPOINT + '/api/auth/register', 
  {
    name: this.name,
    email: this.email,
    password: this.password,
    password_confirmation: this.password_confirmation,
    birthdate: this.birthdate,
  }) 
  
  .then((response) => {
    (response.data)
    this.$router.push({name: "Login"});
  })

      if (!this.name) {
        this.errors.push("Name required.");
      }
      if (!this.email) {
        this.errors.push("Email required.");
      }
      if (!this.password) {
        this.errors.push("Password required.");
      }
      if (!this.password_confirmation) {
        this.errors.push("Password confirmation required.");
      }
      if (!this.birthdate) {
        this.errors.push("Birthdate required.");
      }
      
      e.preventDefault();
    },
  },
};
</script>


<style scoped>
.form-body {
  color: #000;
  background: rgb(255, 255, 255);
  /* display: inline-block; */
  height: 17em;
  width: 12em;
  padding: 1em;
  box-shadow: 5px 5px 7px rgba(33, 33, 33, 0.7);
  transition: transform 0.15s linear;
  margin: 1em;
  flex-wrap: wrap;
  overflow-wrap: break-word;
  overflow: hidden;
  border-radius: 1.5em;
  margin-right: auto;
  margin-left: auto;
}

h1 {
  text-align: center;
}
</style>