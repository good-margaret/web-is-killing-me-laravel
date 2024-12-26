<script setup>
defineProps({
  product: {}
})

const buy = () => {
  alert('Added!')
  // send request to API
}
</script>

<template>
  <div class="product-item">
    <div class="img-container">
<!--      <router-link :to="{name: 'product-info', params: {id: product.id}}">-->
        <img :src="product.picture">
<!--      </router-link>-->
    </div>
    <div class="fancy-text">
      <router-link :to="{name: 'product-info', params: {id: product.id}}">{{ product.name }}</router-link>
    </div>
    <div class="row vertical-center between">
      <div class="row vertical-center between">
        <button class="btn-cart" @click="buy">
          Buy Now
        </button>
        <button class="btn-like">
          <img src="@/assets/img/icon-heart.png">
        </button>
        <button class="btn-like">
          <img src="@/assets/img/cart-bag.png">
        </button>
      </div>
      <div class="price">
        <div class="ex-price" v-show="product.isSale"> {{product.exprice}} ₽</div>
        {{ product.price}} ₽
      </div>
    </div>
    <div class="hover-block"></div>
    <div class="sale" v-show="product.isSale">
      <img src="@/assets/img/icon-discount.png">
    </div>
  </div>
</template>