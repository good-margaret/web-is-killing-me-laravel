<script setup>
defineProps({
  product: {}
})
</script>

<template>
<!--  <div class="product-item">-->
<!--    <div class="img-container">-->
<!--      <img src="https://avatars.mds.yandex.net/get-mpic/2017233/img_id2997718704707434454.jpeg/450x600">-->
<!--    </div>-->
<!--    <h3>{{ product.name }}</h3>-->
<!--    <div class="row vertical-center between">-->
<!--      <div>-->
<!--        <button class="btn-cart">Заказать</button>-->
<!--      </div>-->
<!--      <div class="price">{{ product.price }} ₽</div>-->
<!--    </div>-->
<!--    <div class="hover-block"></div>-->
<!--    <div class="sale">-->
<!--      <img src="@/assets/img/sale.png">-->
<!--    </div>-->
<!--  </div>-->

    <div class="product-item">
      <div class="img-container">
        <img src="@/assets/img/bouquet-1.jpg" />
      </div>

      <div class="fancy-text">
        Wonderful wishes
      </div>

      <div class="row vertical-center between">
        <div class="row vertical-center between">
          <button class="btn-cart">Buy now</button>
          <button class="btn-like">
            <img src="@/assets/img/icon-heart.png">
          </button>
          <button class="btn-like">
            <img src="@/assets/img/cart-bag.png">
          </button>
        </div>
        <div class="price">
          <div class="ex-price" v-show="product.isSale"> {{ product.exprice }} ₽</div>
          {{ product.price }} ₽
        </div>
      </div>
      <div class="hover-block"></div>
      <div class="sale" v-show="product.isSale">
        <img src="@/assets/img/icon-discount.png">
      </div>
    </div>

</template>

<style scoped>

</style>