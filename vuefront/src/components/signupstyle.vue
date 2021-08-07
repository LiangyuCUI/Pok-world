<template>
  <h1>SIGNUP</h1>
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
    <div class="email">
      <label for="email" class="label-title">Email : </label>
      <input
        type="email"
        id="email"
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
    <div class="confirmpassword">
      <label for="confirm-password" class="label-title"
        >Confirm Password:
      </label>
      <input
        type="password"
        class="form-input"
        id="confirm-password"
        required="required"
      />
    </div>
    <div class="dateofbirth">
        <label for="dateofbirth" class="label-title">Date of birth : </label>
      <input type="date" value="2000-06-01" max="2008-01-01">
    </div>
    <!-- <button class="button button-block">signup</button> -->
    <span class="signupbutton" type="button" title="Click me to signup"><img src=../assets/pokeball.png height="35"/></span>
    <span class="clearButton" type="button" title="Click me to clear">&#10060;</span>
  </div>
</template>
<script>
export default {
  name: "signupstyle",
};
</script>
<style scoped>
.form-body{
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

h1{
  text-align: center;
}
</style>