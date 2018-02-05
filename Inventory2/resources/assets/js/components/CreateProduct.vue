// Createproduct.vue
<template>
  <div>
    <h1>Add product</h1>
    <form v-on:submit.prevent="addProduct">
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Product Name:</label>
            <input type="text" class="form-control" v-model="product.name" required > 
          </div>
        </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label>Product Price:</label>
              <input type="text" class="form-control col-md-6" v-model="product.price" required >
            </div>
          </div>
        </div><div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Product Quantity:</label>
            <input type="text" class="form-control" v-model="product.quantity" required >
          </div>
        </div>
        </div>
        <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Product Barcode:</label>
            <input type="text" class="form-control" v-model="product.barcode" required >
          </div>
        </div>
        </div>
        <br />
        <div class="form-group">
          <button class="btn btn-primary">Add Product</button>
        </div>
    </form>
  </div>
</template>
<script>
  import axios from 'axios';
  export default {

      data(){
           
        return{
           product:{
            name:' ',
            price:' ',
            barcode:' ',
            quantity:' '
           }
      
        }
    },
  
    methods: {
      addProduct(){
         axios.post('/Addnew',this.product).then((response) => {
         this.$router.push({name:'DisplayProduct'})
        });
    }
  }
}

</script>