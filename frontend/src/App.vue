<script setup>
import { RouterView } from 'vue-router'
import {ref} from 'vue'
import Header from "@/components/Site/Header.vue";
import Footer from "@/components/Site/Footer.vue";

const searchResult = ref('')
const isShowSearch = ref(false)

const search = () => {
  isShowSearch.value = searchResult.value.length >= 3
}
</script>

<template>
  <div class="wrap">
    <Header />

    <main>
      <div class="container">
        <RouterView />
      </div>
    </main>
  </div>

  <Footer />
</template>

<!--<style scoped>-->
<!--.logo {-->
<!--  width: 100px;-->
<!--}-->

<!--.some-img {-->
<!--  width: 260px;-->
<!--  margin: 0;-->
<!--  position: relative;-->
<!--}-->

<!--a {-->
<!--  text-decoration: none;-->
<!--  color: black;-->
<!--  border: 2px solid transparent;-->
<!--  padding: 5px;-->
<!--  transition: border-color 0.3s ease;-->
<!--}-->

<!--a:hover {-->
<!--  text-decoration: none;-->
<!--  color: rgb(211, 166, 82);-->
<!--  padding: 5px;-->
<!--}-->

<!--nav a:hover {-->
<!--  border: 2px solid black;-->
<!--  /* padding: 3.5px; */-->
<!--  color: black;-->
<!--}-->

<!--.row {-->
<!--  display: flex;-->
<!--}-->

<!--.between {-->
<!--  justify-content: space-between;-->
<!--}-->

<!--.vertical-center {-->
<!--  align-items: center;-->
<!--}-->

<!--body {-->
<!--  background-color: #eee;-->
<!--  margin: 0;-->
<!--  font-family: "Roboto", sans-serif;-->
<!--  font-weight: normal;-->
<!--  font-style: normal;-->
<!--  color: #21201f;-->
<!--  line-height: 22px;-->
<!--}-->

<!--header {-->
<!--  background-color: #fff;-->
<!--  padding: 10px;-->
<!--}-->

<!--main {-->
<!--  margin-top: 20px;-->
<!--  margin-bottom: 25px;-->
<!--  padding: 0 15px;-->
<!--}-->

<!--footer {-->
<!--  background-color: #fff;-->
<!--  padding: 45px 15px;-->
<!--}-->

<!--nav ul {-->
<!--  list-style: none;-->
<!--  padding-left: 0;-->
<!--  gap: 15px;-->
<!--}-->

<!--.search {-->
<!--  position: relative;-->
<!--}-->

<!--.search input {-->
<!--  width: 300px;-->
<!--  border: 2px black solid;-->
<!--  border-radius: 6px;-->
<!--  padding: 10px 15px;-->
<!--  transition: width 0.2s ease-in-out;-->
<!--  font-size: 16px;-->
<!--}-->

<!--.search input:focus {-->
<!--  width: 350px;-->
<!--  font-size: 16px;-->
<!--}-->

<!--.container {-->
<!--  max-width: 1400px;-->
<!--  margin: 0 auto;-->
<!--}-->

<!--@media (min-width: 1024px) {-->
<!--  header {-->
<!--    display: flex;-->
<!--    place-items: center;-->
<!--    padding-right: calc(var(&#45;&#45;section-gap) / 2);-->
<!--  }-->

<!--  .logo {-->
<!--    margin: 0 2rem 0 0;-->
<!--  }-->

<!--  header .wrapper {-->
<!--    display: flex;-->
<!--    place-items: flex-start;-->
<!--    flex-wrap: wrap;-->
<!--  }-->

<!--  nav {-->
<!--    text-align: left;-->
<!--    margin-left: -1rem;-->
<!--    font-size: 1rem;-->

<!--    padding: 1rem 0;-->
<!--    margin-top: 1rem;-->
<!--  }-->
<!--}-->
<!--</style>-->
