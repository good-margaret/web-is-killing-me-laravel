<script setup>
import Product from "@/components/Catalog/Product.vue";
import axios from "axios";
import {ref} from "vue";

//const products = ref([])
//const load = ref(true)

const load = ref(false)

//axios.get('catalog/top')
//    .then((response) => products.value = response.data)
//    .finally(() => load.value = false)

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
    picture: 'https://gryazi.flowlove.ru/wp-content/themes/init/catalog/images/products/buket-lyubvi-i-zaboty-0-large.webp' ,
    exprice: 6000,
    price: 3705,
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

</script>

<template>

  <div class="cool-name">Bouquet Collection</div>

  <div class="preloader" v-if="load">
    <img src="@/assets/img/preloader.gif" />
  </div>

  <section class="row list-products">
    <div class="product-column" v-for="item in products">
        <Product :product="item" />
    </div>
  </section>
</template>

<style>
  .preloader {
   text-align: center;
  }
</style>
