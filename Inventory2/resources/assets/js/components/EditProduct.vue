// Editproduct.vue
<template>
    <div>
        <h1>Update Product</h1>
        <div class="row">
          <div class="col-md-10"></div>
          <div class="col-md-2"><router-link :to="{ name:'DisplayProduct' }" class="btn btn-success">Return to Products</router-link></div>
         </div>
         <form v-on:submit.prevent="updateProduct(product)">
            <div class="form-group">
                <label name="product_price">Product Price</label>
                <input type="text" class="form-control" v-model="product.Price"  required >

                <!-- <a v-bind:href="url"></a> -->
                <!-- v-model="product.Price"  -->
            </div>
            <div class="form-group">
                <label>Product Name:</label>
                <label name="product_price">Product Quantity</label>
                <input type="text" class="form-control" v-model="product.Quantity"  required>
            </div>
            <div class="form-group">
                <label name="product_price">Product Barcode</label>
                <input type="text" class="form-control" v-model="product.Barcode"   required>
            </div>     

            <div class="form-group">
                <button class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
</template>
<script>
    import axios from 'axios'
    import {mapActions}  from "vuex";
    import {mapGetters}  from "vuex";
    export default{ 
      data(){
           
        return{
            product:{ }
        }
    },
    mounted(){
        this.product=this.selectedProduct;
    },
        
        methods: {

               ...mapActions(['updateProductinDatabase']),
               updateProduct(product)
                   {     
                        //axios.post('/Adjustproduct/'+this.$route.params.id,this.product).then((response) =>//
                        let id=this.$route.params.id;
                        this.updateProductinDatabase({product,id})
                        this.$router.push({name:'DisplayProduct'});


                   }
               },
         computed:{
             
             ...mapGetters(['productCurrent','products','productCount','totalPrice','selectedProduct'])
        }
  }
</script>