<template>
  <div>
    <form @submit.prevent="loginUser">
      <div class="form-head">
        <h1>Welcome Back!</h1>
        <img class="loginlogo" src="../assets/hug.png" />
      </div>

      <div class="form-body">
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

        <p class="forgot">
          <a
            href="https://tenor.com/view/will-smith-fresh-prince-dramatic-gif-11531919"
            >Forgot Password?</a
          >
        </p>

        <span @click="loginUser" class="loginbutton" type="submit" title="click for login"


          ><img src=../assets/pokeball.png height="35"/></span
        >
      </div>
    </form>
  </div>
</template>

<script>
import axios from "axios";

export default {
  name: "loginstyle",
  data() {
    return {
      email: "",
      password: "",
    };
  },

  methods: {
    loginUser: function () {
      axios
        .post(process.env.VUE_APP_ENDPOINT + "/api/auth/login", {
          email: this.email,
          password: this.password,
        })

        .then((response) => {
          console.log(
            "LOGGED IN! \n " + "token: " + response.data.token
          );
          console.log(response.data);
          let token = response.data.token;
          
          localStorage.setItem("token", token);
          this.$router.push({ name: "Home" });
        });

    },
  },
};
</script>

<style scoped>
.form-body {
  color: #000;
  background: rgb(255, 255, 255);
  /* display: inline-block; */
  height: 15em;
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
.loginlogo {
  height: 135px;
}

h1 {
  text-align: center;
}
.loginlogo {
  margin-left: auto;
  margin-right: auto;
  display: block;
}
</style>