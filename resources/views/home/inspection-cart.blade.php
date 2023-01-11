<x-home.home-master>
    @section('content')
    <nav class="navbar navbar-expand-lg sticky-top shadow-sm navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{route('home')}}"><img src="{{asset('img/logo.png')}}" style="max-height:50px;"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              @if(Auth::check())
              <li class="nav-item">
                <a class="nav-link" href="{{route('home')}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('dashboard.index')}}">Dashboard</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Categories
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('home.listing')}}">Listings</a>
              </li>
              <li class="nav-item">
                <a class="nav-link ">Partner</a>
              </li>
              <li class="nav-item">
                <form action="/logout" method="post">
                @csrf
                  <button type="submit" class="btn btn-outline-dark">Logout</button>
              </form>
              </li>
              @else
              <li class="nav-item">
                <a class="nav-link" href="{{route('home')}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#category">Category</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('home.listing')}}">Listings</a>
              </li>
              <li class="nav-item">
                <a class="nav-link ">Partner</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/register">Register</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/login">Login</a>
              </li>
              @endif
      
             
            </ul>
            <button type="button" class="btn btn-primary position-relative">
              <i class="fa fa-cart-plus"></i>
              <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                
                @forelse ($cart as $carts)
                  @if(Auth::check())
                    @if ($carts->user_id == Auth()->user()->id)
                    {{$carts->count()}}
                    @else
                    0
                    @endif
                  @else
                    0
                  @endif
                @empty
                0
                @endforelse
                
              </span>
            </button>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
      <div style="position: relative">
        <div class="row bg-dark" style="padding:130px;">
            <h1 style="background:#6d7075; padding:10px; font-family:futura md bt; font-weight:bold; color:rgb(255, 255, 255); text-transform:uppercase;" class="text-center container">Cart <i class="fa fa-cart-plus"></i></h1>
        </div>
    </div>
    <div class="container">
        <div class="row my-4">
          <div class="col-md-9">
            
            @forelse ($Inspectionitem as $cart)
            <div class="row my-4">
              <div class="col-sm-2">
                <form method="POST" action="{{route('inspection.destroy', $cart->id)}}">
                  @csrf
                  @method("DELETE")
                <img src="{{$cart->property->featured_image}}" class="img-fluid" alt="Ruachr">
               
                <p class="text-center"><button class="btn btn-light btn-sm position-relative text-danger" type="submit">Remove<i class="fa fa-trash"></i></button></p>
                </form>
              </div>
              <div class="col-sm-9">
                <h6 class="my-0">{{$cart->property->title}}</h6>
                <p class="card-subtitle mb-2 text-muted">at : {{$cart->property->location->name}}</p>
                <p class="card-subtitle mb-2 text-muted" style="font-size:16px"> <span class="badge rounded-pill bg-primary">{{$cart->property->category->name}}</span></p>
                <p class="card-subtitle mb-2 text-muted">&#8358;{{ number_format($cart->property->amount, 2, ',', '.') }}</p>
                <p class="card-subtitle mb-2 text-muted">Offer: <span class="">{{$cart->property->offer==1 ? 'Open' : 'Closed'}}</p>
              </div>
            </div>
            
          </div>
          <div class="col-md-3">
              <div class="card">
                <h3 class="card-title"></h3>
                <form id="paymentForm">
                  <input type="text" name="email" id="email-address" value="{{Auth()->User()->email}}" class="form-control">
                  <input type="text" name="amount" id="amount" class="form-control" value="{{$cart->amount}}">
                <button class="btn btn-primary" onclick="payWithPaystack()">Pay &#8358;{{ number_format($cart->amount, 2, ',', '.') }}</button>
              </form>
              <script src="https://js.paystack.co/v1/inline.js"></script> 
              </div>
          </div>
          @empty
              <div class="alert alert-danger my-4">No item found in your cart</div>
            @endforelse
        </div>
    </div>
    <script>
      const paymentForm = document.getElementById('paymentForm');
      paymentForm.addEventListener("submit", payWithPaystack, false);
      function payWithPaystack(e) {
        e.preventDefault();

        let handler = PaystackPop.setup({
          key: 'pk_test_851fecc42dfe2f708b9f6de9b5ff8c220d95dc99', // Replace with your public key
          email: document.getElementById("email-address").value,
          amount: document.getElementById("amount").value * 100,
          ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
          // label: "Optional string that replaces customer email"
          onClose: function(){
            alert('Window closed.');
          },
          callback: function(response){
            let message = 'Payment complete! Reference: ' + response.reference;
            alert(message);
          }
        });

        handler.openIframe();
      }
    </script>
    @endsection
</x-home.home-master>