// Display.vue
<template>
    <div>
        <h1>Products</h1>
        <!-- include dashboard -->
        <dashboard :products='products'></dashboard>
         
        <div class="row">
          <div class="col-md-10"></div>
          <div class="col-md-2">
            <router-link :to="{ name:'CreateProduct' }" class="btn btn-primary">Add Product</router-link>
          </div>
        </div><br />
        <table class="table table-hover">
            <thead>
            <tr>
                <td>Name</td>
                <td>Price</td>
                <td>Quantity</td>
                <td>Barcode</td>
            </tr>
            </thead>
             <tbody>
                 <tr v-for="product in products" :key="product.id">
                    <td>{{ product.Name}}</td>
                    <td>{{ product.Price }}</td>
                    <td>{{ product.Quantity}}</td>
                    <td>{{ product.Barcode}}</td>
                    <td><router-link :to="{name:'EditProduct', params:{id: product.id }}" class="btn btn-primary">Edit</router-link></td>
                    <td><button class="btn btn-danger" @click="deleteProduct(product.id)">Delete</button></td>
                </tr>
            </tbody>
        </table>
    </div>
</template>
<script>
    import axios from 'axios';
    import dashboard from "./DashBoard";
    export default {
        components:{dashboard},
        data(){
            return{
                products:[]
            }
        },
        mounted()
        {
            this.fetchProducts();
        },
        methods: {
            fetchProducts()
            {
                  axios.get('./products').then(response=>{
                  this.products= response.data;

              });
             },
              deleteProduct(id)
              {  
                 this.products.splice(id, 1);
                 axios.get('./products/'+id).then(response=>{
                 this.products= response.data;
               });
             }
        }
    }
</script>

