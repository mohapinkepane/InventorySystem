// Createproduct.vue
<template>
  <div>
    <h1>Add product</h1>
    <form v-on:submit.prevent="saveProduct">
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Product Name:</label>
            <input type="text" class="form-control" v-model="product.Name" required > 
          </div>
        </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label>Product Price:</label>
              <input type="text" class="form-control col-md-6" v-model="product.Price" required >
            </div>
          </div>
        </div><div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Product Quantity:</label>
            <input type="text" class="form-control" v-model="product.Quantity" required >
          </div>
        </div>
        </div>
        <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Product Barcode:</label>
            <input type="text" class="form-control" v-model="product.Barcode" required >
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
import { mapActions } from "vuex";
  export default {

      data(){
           
        return{
           product:{
            Name:' ',
            Price:'',
            Barcode:' ',
            Quantity:' '
           }
      
        }
    },
  
    methods: {
      ...mapActions(['addProduct']),

        saveProduct(){
              this.addProduct(this.product);
              this.$router.push({name:'DisplayProduct'});
      }
  }
}

</script>