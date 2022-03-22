<template>
  <h1>Sync Order</h1>
  <h2>{{article_code_returned}}</h2>
  <!-- <form @submit.prevent="submit"> -->
    <form @submit.prevent="form.post('/order/create',{
      preserveScroll: false,
    })" action="#">

    <label for="ArticleCode">ArticleCode
      <input type="text" id="ArticleCode" v-model="form.article_code">
    </label><br/>

    <label for="ArticleName">ArticleName
      <input type="text" name="ArticleName" id="ArticleName">
    </label><br/>

    <label for="UnitPrice">UnitPrice
      <input type="text" id="UnitPrice" v-model="form.unit_price">
    </label><br/>

    <label for="Quantity">Quantity
      <input type="text" id="Quantity" v-model="form.quantity">
    </label><br/>

    <button type="submit">Create Order</button>

  </form>
  
  <hr/>
  <!-- Box for CREATE_ORDER response -->
  <div>
    <span>Order Id: {{order_id}}</span><br/>
    <span>Order Code: {{order_code}}</span><br/>
    <span>Order Date: {{order_date}}</span><br/>
    <span>Total Amount Without Discount: {{total_amount_without_discount}}</span><br/>
    <span>Total Amount With Discount: {{total_amount_with_discount}}</span><br/>
  </div>

</template>

<script>
import { reactive } from 'vue'
import { Inertia } from '@inertiajs/inertia'
import { useForm } from '@inertiajs/inertia-vue3'

export default {
  props: {
    order_id: Number,
    order_code: String,
    order_date: String,
    total_amount_without_discount: Number,
    total_amount_with_discount: Number,
  },
  // setup () {
  //   const form = reactive({
  //     article_code : null,
	//     ArticleName  : null,
	//     UnitPrice    : null,
	//     Quantity     : null
  //   })

  //   function submit() {
  //     Inertia.post('/create/order', form)
  //   }

  //   return { form, submit }
  // },

  
  setup () {
    const form = useForm({
      order_id: null,
      unit_price: null,
      quantity: null,
    })


    return { form }
  },
}

</script>

<style>

</style>