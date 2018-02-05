@extends('master')
@section('content')

  {{--  ////////////////////////////  --}}
  <div class="card mb-4 box-shadow">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">New Product</h4>
        </div>
        <div class="card-body">
          
          <form method ="POST" action ="/Addnew">
    
            {{csrf_field()}}
            <div class="form-group">
                    <label for="Name">Name</label>
                    <input type="text" class="form-control" id="Name"  name="Name"  required>
                  </div>

             <div class="form-group">
               <label for="Price">Price</label>
               <input type="text" class="form-control" id="Price"  name="Price" required>
              
             </div>
     
             <div class="form-group">
               <label for="Quantity">Quantity</label>
               <input type="text" class="form-control" id="Quantity"  name="Quantity" required>
             </div>

             <div class="form-group">
                <label for="Barcode">Barcode</label>
                <input type="text" class="form-control" id="Barcode"  name="Barcode" required>
             </div>

           <div class ="form-group"> 
             <button type="submit" class="btn btn-primary" >Add</button>
           </div>
     
          @include('errors')
           </form>

        </div>
      </div>
      
      </div>
      {{--  ///////////////////////////////////  --}}
@endsection