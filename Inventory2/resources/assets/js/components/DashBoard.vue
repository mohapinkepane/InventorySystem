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
    import { mapGetters } from "vuex";
    export default {


        data(){
            return{
 
                  }
         },
        computed:{
                ...mapGetters(['products','productCount','totalPrice']),

              },  

    }
</script>
  
  