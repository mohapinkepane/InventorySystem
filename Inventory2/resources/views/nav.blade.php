<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
    <h5 class="my-0 mr-md-auto font-weight-normal" style="color:blue;">THOOLA SUPERMARKET</h5>
    <nav class="my-2 my-md-0 mr-md-3">
      {{--  <a class="p-2 text-blue" href="/">Home</a>  --}}
      <a class="p-2 text-blue" href="/menu">Menu</a> 
      <a class="p-2 text-blue" href="/products">Products</a>
               
       <!-- Authentication Links -->
    @guest
       <a class="btn btn-outline-primary" href="{{ route('login') }}">Login</a> 
       @else
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
              {{ Auth::user()->name }} <span class="caret"></span>
          </a>    
                  
                  <a class="btn btn-outline-primary" href="{{ route('register') }}">Register new user</a>
                  <a class="btn btn-outline-primary"  href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                      Logout
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                  </form>
      
    @endguest
  <div>
    <p>this has been changed to check pull request</p>
  </div>
       
    </nav>

</div>
