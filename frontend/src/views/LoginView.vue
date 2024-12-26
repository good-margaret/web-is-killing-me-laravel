<script setup>
import {ref} from 'vue'

const login = ref('')
const password = ref('')

const loginError = ref('')
const passwordError = ref('')

const singIn = (event) => {
  if (login.value.length === 0) {
    loginError.value = 'Please enter your login.'
  } else {
    loginError.value = ''
  }

  if (password.value.length === 0) {
    passwordError.value = 'Please enter your password.'
  } else {
    passwordError.value = ''
  }

  event.preventDefault()
}

const remember = () => {
  alert('Cannot help! Try remembering ...')
  // send request to API
}
</script>

<template>
  <section class="login-form">
    <h1>Authorization</h1>
    <br/>
    <form  @submit="singIn">
      <div class="form-item">
        <input name="login" type="text" placeholder="Login" v-model="login">
        <div class="error">{{ loginError }}</div>
      </div>
      <div class="form-item">
        <input name="password" type="password" placeholder="Password" v-model="password">
        <div class="error">{{ passwordError }}</div>
      </div>
      <br/>
      <div class="form-item">
        <button class="btn-login yellow">Log in</button>
      </div>
      <div class="form-item">
        <button class="btn-login green" @click = "remember">Forgot your password?</button>
      </div>
    </form>
  </section>
</template>