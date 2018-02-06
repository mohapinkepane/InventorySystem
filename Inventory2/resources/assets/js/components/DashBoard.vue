  <template>
    <div> 
              <h3>DashBoard</h3>  
               <table class="table table-hover">
                   <thead> 
                       <td>Number of products</td>
                       <td>Total Price</td>
                   </thead>
                    <tbody>
                    <tr>
                    <td>{{productCount}}</td>
                    <td>{{totalPrice}}</td>
                    </tr>
                  </tbody>    
              </table> 

  </div>
  </template>

<script>
    import axios from 'axios';
    export default {
        props:['products'],

        data(){
            return{

                  }
        },
        computed:{
                 
                 productCount:function(){
                 return this.products.length;

                              },

                totalPrice:function(){
                     let total=0;
                     this.products.forEach(product=>{
                         isNaN(parseInt(product.Price))?'':total += parseInt(product.Price);
                     });      
                     return total;                 
                    }

              },  

    }
</script>
  
  