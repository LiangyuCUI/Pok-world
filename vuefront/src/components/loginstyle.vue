<template>
<div class="form-head">
    <h1>Welcome Back!</h1>
    <img class="loginlogo" src="../assets/hug.png">
</div>

    <div class="form-body">
      <div class="name">
       <label for="name" class="label-title">Name : </label>
         <input
        type="text"
        id="name"
        class="form-input"
        required="required"
      />
      </div>

         <div class="password">
      <label for="password" class="label-title">Password : </label>
      <input
        type="password"
        id="password"
        class="form-input"
        placeholder="enter your password"
        required="required"
      />
    </div>

      <p class="forgot"><a href="https://tenor.com/view/will-smith-fresh-prince-dramatic-gif-11531919">Forgot Password?</a></p>

      <span class="loginbutton" type="button"><img src=../assets/pokeball.png height="35"/></span>
  </div>
</template>
<script>
export default {
  name: "loginstyle",
};
</script>

<style scoped>
.form-body{
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
.loginlogo{
  height:135px;
}

h1{
  text-align: center;
}
.loginlogo{
  margin-left: auto;
    margin-right: auto;
    display: block;
}
</style>