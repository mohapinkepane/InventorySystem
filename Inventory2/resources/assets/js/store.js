
import Vuex from "vuex";
import Vue from 'vue';
import axios from 'axios';
Vue.use(Vuex);
export const store = new Vuex.Store({
  state: {

    products:[  ],
    selectedProduct:{}
  
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
        },
      productCurrent(state)
      {
         return state.products.product;
      },
      selectedProduct(state){
            return state.selectedProduct;
      }
  },
  mutations:{
        SET_SELECTED_PRODUCT(state,product){
            state.selectedProduct=product;
        },
        CLEAR_SELECTED_PRODUCT(state,product){
            state.selectedProduct={};
        },
        PULL_PRODUCT_LIST(state,products){
        state.products=products;
        },
        ADD_PRODUCT_TO_LIST(state,product){
            state.products.push(product);
        },
        DELETE_PRODUCT(state,product){
            let index=state.products.indexOf(product);
            if (index > -1) {
               state.products.splice(index, 1);
            }
        },
        UPDATE_PRODUCT(state,product){

            let refreshProduct=state.products.find(item=>{
                return item.id==product.id;
            });

            let productIndex=state.products.indexOf(refreshProduct);
            state.products[productIndex]=product;

        }

  },
  actions:{
    
    setSelectedProduct({commit},product){
        commit('SET_SELECTED_PRODUCT',product);
    },
    addProduct({commit},product){
        axios.post('/Addnew',product).then((response) => {
            commit('ADD_PRODUCT_TO_LIST',product)

           }).catch(error=>{

           })
          },
   fetchProductsList({commit})
          {  
            axios.get('./products').then((response) => {
              
              commit('PULL_PRODUCT_LIST',response.data)
    
               }).catch(error=>{
                  console.log('ERROR');
               })
               
           },

    deleteProduct({commit},product){
      axios.get('./products/'+product.id).then(response=>{
                 commit('DELETE_PRODUCT',product)
            }).catch(error=>{
               
            })
            },
            
    updateProductinDatabase({commit},{product,id}){
     
    axios.post('/Adjustproduct/'+id,product).then((response) => {
           commit('UPDATE_PRODUCT',{product})   ;
          
        
        }).catch(error=>{
            console.log(error);
        })

     } 
  }
  
});






