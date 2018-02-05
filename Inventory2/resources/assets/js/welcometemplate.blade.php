<!doctype html>
 <html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name','Laravel') }}</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> 

</head>
  <body>

    <!--  home navigation bar -->
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
            <h5 class="my-0 mr-md-auto font-weight-normal" style="color:blue;">THOOLA SUPERMARKET</h5>
            <nav class="my-2 my-md-0 mr-md-3">
                        <!-- Authentication Links -->
                        @guest
                             <a class="btn btn-outline-primary" href="{{ route('login') }}">Login</a>
                             @else
                             <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                 {{ Auth::user()->name }} <span class="caret"></span>
                             </a>
     
                                     <a class="btn btn-outline-primary"  href="{{ route('logout') }}"
                                         onclick="event.preventDefault();
                                                  document.getElementById('logout-form').submit();">
                                         Logout
                                     </a>
     
                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                         {{ csrf_field() }}
                                     </form>
                           
                        @endguest
            </nav>
        
     </div>
    <!--navigation bar-->
    <!--picture-->
          <head>
                <style>
                img { 
                    width:100%; 
                }
                </style>
                </head>
                <body>
                    
                <img src ='images\a.jpg'  style="width:1050px;height:600px;"> 
                
                </body>
     <!--endpicture-->

    {{--  including footer  --}}
    @include('footer')
  
  </body>
  </html>
