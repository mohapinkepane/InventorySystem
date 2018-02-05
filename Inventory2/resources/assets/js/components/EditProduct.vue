// Editproduct.vue
<template>
    <div>
        <h1>Update Product</h1>
        <div class="row">
          <div class="col-md-10"></div>
          <div class="col-md-2"><router-link :to="{ name:'DisplayProduct' }" class="btn btn-success">Return to Products</router-link></div>
         </div>
         <form v-on:submit.prevent="updateProduct">
            <div class="form-group">
                <label name="product_price">Product Price</label>
                <input type="text" class="form-control" v-model="product.Price">
            </div>
            <div class="form-group">
                <label name="product_price">Product Quantity</label>
                <input type="text" class="form-control" v-model="product.Quantity">
            </div>
            <div class="form-group">
                <label name="product_price">Product Barcode</label>
                <input type="text" class="form-control" v-model="product.Barcode">
            </div>
            <div class="form-group">
                <button class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
</template>
<script>
    import axios from 'axios';
    export default{ 
      data(){
           
        return{
            product:{
            Price:' ',
            Quantity:' ',
            Barcode:' ',
           }
        }
    },
        
        methods: {

               updateProduct()
                   {     
                        axios.post('/Adjustproduct/'+this.$route.params.id,this.product).then((response) => {
                        this.$router.push({name:'DisplayProduct'});
                                   })


                   }
               }
  }
</script>