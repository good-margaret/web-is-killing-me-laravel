<script setup>
import {useRoute} from "vue-router";
import axios from "axios";
import {ref} from "vue";
//import products from "@/components/Catalog/Home.vue";

const id = useRoute().params.id
//const product = ref({})

const products = [
  {
    id: 0,
    name: 'Wonderful wishes',
    picture: 'https://gryazi.flowlove.ru/wp-content/themes/init/catalog/images/products/buket-dolina-czvetov-large.webp',
    exprice: 5000,
    price: 2436,
    isSale: true,
    info: 'This is a photo of a beautiful flower\
    bouquet arranged with soft yellow roses,\
    creamy white hydrangeas, light pink lisianthus,\
    and sprigs of greenery. The bouquet is wrapped in\
    elegant white and green paper with decorative accents,\
    giving it a fresh and sophisticated appearance. It is\
    displayed in a clear glass vase, highlighting the\
    delicate and harmonious composition of the flowers.',

  },
  {id: 1,
    name: 'Romantic moment',
    picture:'https://gryazi.flowlove.ru/wp-content/themes/init/catalog/images/products/buket-aromatnoe-oblako-0-large.webp',
    exprice: 5500,
    price: 3860,
    isSale: true,
    info: 'This is a photo of a beautiful flower\
    bouquet arranged with soft yellow roses,\
    creamy white hydrangeas, light pink lisianthus,\
    and sprigs of greenery. The bouquet is wrapped in\
    elegant white and green paper with decorative accents,\
    giving it a fresh and sophisticated appearance. It is\
    displayed in a clear glass vase, highlighting the\
    delicate and harmonious composition of the flowers.',
  },

  {
    id: 2,
    name: 'Sweet dream',
    picture: 'https://gryazi.flowlove.ru/wp-content/themes/init/catalog/images/products/buket-lyubvi-i-zaboty-0-large.webp',
    exprice: 5000,
    price: 2436,
    isSale: true,
    info: 'This is a photo of a beautiful flower\
    bouquet arranged with soft yellow roses,\
    creamy white hydrangeas, light pink lisianthus,\
    and sprigs of greenery. The bouquet is wrapped in\
    elegant white and green paper with decorative accents,\
    giving it a fresh and sophisticated appearance. It is\
    displayed in a clear glass vase, highlighting the\
    delicate and harmonious composition of the flowers.',

  },
  {id: 3,
    name: 'Romantic moment',
    picture:'https://gryazi.flowlove.ru/wp-content/themes/init/catalog/images/products/buket-aromatnoe-oblako-0-large.webp',
    exprice: 5500,
    price: 3860,
    isSale: false,
    info: 'This is a photo of a beautiful flower\
    bouquet arranged with soft yellow roses,\
    creamy white hydrangeas, light pink lisianthus,\
    and sprigs of greenery. The bouquet is wrapped in\
    elegant white and green paper with decorative accents,\
    giving it a fresh and sophisticated appearance. It is\
    displayed in a clear glass vase, highlighting the\
    delicate and harmonious composition of the flowers.',

  },
]

const product = products[id]

//axios.get('products/' + id)
//    .then((response) => product.value = response.data)

</script>

<template>
  <div class="container">
    <div class="row vertical-center between">
      <section class="product-card-slider">
        <img :src= product.picture>
      </section>

      <section class="product-card-info">
        <div class="cool-name">{{ product.name }}</div>

        <div>
          {{ product.info }}


<!--          This is a photo of a beautiful flower-->
<!--          bouquet arranged with soft yellow roses,-->
<!--          creamy white hydrangeas, light pink lisianthus,-->
<!--          and sprigs of greenery. The bouquet is wrapped in-->
<!--          elegant white and green paper with decorative accents,-->
<!--          giving it a fresh and sophisticated appearance. It is-->
<!--          displayed in a clear glass vase, highlighting the-->
<!--          delicate and harmonious composition of the flowers.-->
        </div>


        <div class="product-card-price-container">
          <div class="row">
            <div class="price ex-price">{{ product.exprice }} ₽</div>
            <div class="price">{{ product.price }} ₽</div>
          </div>

          <br />

          <div class="row">
            <button class="btn-cart">Buy now</button>
            <button class="btn-like">
              <img src="@/assets/img/icon-heart.png">
            </button>
            <button class="btn-like">
              <img src="@/assets/img/cart-bag.png">
            </button>
          </div>
        </div>
      </section>
    </div>
  </div>
</template>

<style scoped>

</style>