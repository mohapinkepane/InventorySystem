<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Product;
use App\User;
class ProductsController extends Controller
 {    
     
    public function index()
    {
        
        return view('index');

    }
    public function welcome()
    {
        
        return view('welcome');

    }
    
    public function Show(Product $product)
     {  
        //  the commented part is for getting a single product
        // return view('show',compact('product'));
        // // return view('show');
        $products =Product::latest()->get();
 
        if(\Request::wantsJson()){
                 return $products;
            
        }
        
        // return view('show',compact('products'));
    }

    public function Addnew()
    {
        
        return view('addnew');
    }
    public function store(request $REQUEST)
    {
        Product::create([
            'Name'=>request("name"),
            'Price'=>request("price"),
            'Quantity'=>request("quantity"),
            'Barcode'=>request("barcode"),  
         ] );
       
        // return redirect('/products');

    }
 
    public function update(Request $request,$id){
            //validate product data
            $this->validate($request,[
                'Price' => 'required',
                'Quantity' =>'required',
                'Barcode' => 'required'
            ]);
            
            //get product datails
            $product= $request->all();

            //update product  data
            Product::find($id)->update($product);
            
             //redirect to products
        
            // return redirect('/products');

        
        }
    

    public function Adjustproduct(Product $product)
      {
        
        return view('Adjustproduct',compact('product'));
 
      }
    public function destroy(Request $request,$id)
    {
          //get product data
          $product= $request->all();
            
          //delete product  data -> delete does not take a parameter
           Product::find($id)->delete( );
        
          //redirect to products
          return redirect('/products');

     
    }
   
   
}

