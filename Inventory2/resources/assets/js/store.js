
import Vuex from "vuex";
import Vue from 'vue';
import axios from 'axios';
Vue.use(Vuex);
export const store = new Vuex.Store({
  state: {

    products:[
        {Name:'Soap',Price:5,Quantity:10,Barcode:123456}
    ],

     product:{
        name:' ',
        price:'',
        barcode:' ',
        quantity:' '

         }

    
      
  },
  getters:{
        products(state){
            return state.products;
        },
        productCount(state){
            return state.products.length;
        },
        totalPrice(state){
            let total=0;
            state.products.forEach(product=>{
                isNaN(parseInt(product.Price))?'':total += parseInt(product.Price);
            });      
            return total; 
        }
  },
  mutations:{
        ADD_PRODUCT_TO_LIST(state,product){
            state.products.push(product);
        }
  },
  actions:{
    addProduct({commit},product){
        axios.post('/Addnew',product).then((response) => {
            commit('ADD_PRODUCT_TO_LIST',product)
            // this.$router.push({name:'DisplayProduct'})
           }).catch(error=>{
               
           })
    }
  }

  

  
});