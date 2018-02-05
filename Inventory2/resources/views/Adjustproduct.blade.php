@extends('master')
@section('content')
          
            <div class="inventory-product">
                <h2 class="inventory-product-Name"></h2>
               
                <div class="container">
                <div class="card-deck mb-3 text-center">
                <div class="card mb-4 box-shadow">
                 <div class="card-header">
                 <h4 class="my-0 font-weight-normal">{{$product->Name}}</h4>
                   </div>
                 <div class="card-body">
                  
                       <form method ="POST" action =" ">  
                          
                       {{csrf_field()}}

                       <div class="form-group">
                         <label for="Price">Price</label>
                         <input type="text" class="form-control" placeholder="{{$product->Price}}" id="Price"  name="Price" required>
                        
                       </div>
                      

                       <div class="form-group">
                         <label for="Quantity">Quantity</label>
                         <input type="text" class="form-control" placeholder="{{$product->Quantity}}" id="Quantity"  name="Quantity" required>
                       </div>
                
                       <div class="form-group">
                          <label for="Barcode">Barcode</label>
                          <input type="text" class="form-control" placeholder="{{$product->Barcode}}" id="Barcode"  name="Barcode" required>
                       </div>
                      <div class ="form-group"> 
                       <button type="submit" class="btn btn-primary" name="Add"  value="Update Product" >Adjust</button>
                     </div> 

                    @include('errors')
                     </form>

                  </div>
                  </div>  
               </div>
@endsection
