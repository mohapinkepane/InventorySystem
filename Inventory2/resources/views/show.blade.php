@extends('master')
@section('content')

<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4">INVENTORY</h1>
            
            <a  class="btn btn-primary"  href="Addnew">Add new product</a>
  </div>
  
      @foreach ( $products as $product)

      {{--  <div class="col-sm-8 blog-main">  --}}
     <div class="container">
       <div class="card-deck mb-3 text-center"> 


       <div class="card mb-4 box-shadow">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">{{$product->Name}}</h4>
        </div>
        <div class="card-body">
          <ul class="list-unstyled mt-3 mb-4">
          <li>Price: M{{$product->Price}}</li>
            <li>Quantity:{{$product->Quantity}}</li>
            <li>Barcode:{{$product->Barcode}}</li>
          </ul>
            {{--  pass a route you want the button to take you  --}}
           <a  class="btn btn-primary"  href="/Adjustproduct/{{$product->id}}">Adjust product</a> 
          <a  class="btn btn-primary" href="/products/{{$product->id}}">Delete product</a>
           
         </div>
        </div>  

      </div>  
    </div> 

      @endforeach 
       
@endsection



{{--  posts  --}}

{{--  view all of the posts  --}}
{{--  GET/posts    --}}

{{--  create a post  --}}
{{--  GET/posts/create  --}}

{{--  STORE POST  --}}
{{--  POST/posts  --}}

{{--  edit existing post  --}}
{{--  GET/posts/{id}/edit  --}}


{{--  view spesific post  --}}
{{--  GET/posts/{id}  --}}

{{--  PATCH/posts/{id}  --}}

{{--  DELETE A POST  --}}
{{--  DELETE/posts/{id}  --}}


   




