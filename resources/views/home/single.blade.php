<x-home.home-master>
    @section('content')

    <div style="position: relative">
        <div class="row" style="background-image:url({{asset('images/bg-background.jpg')}}); background-size:cover; background-position:center; padding:130px;">
            <h1 style="background:#6d7075mm; padding:10px; font-family:futura md bt; font-weight:bold; color:rgb(255, 255, 255); text-transform:uppercase;" class="text-center container">{{$property->title}}</h1>
        </div>
    </div>

    <div class="container">
        <div class="row" style="margin-top: 50px">
            <div class="col-md-7 my-4 container">
                <div class="row">
                    <div>
                        <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
                            <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{$property->featured_image}}" class="d-block w-100" alt="RentApp">
                            </div>
                            @foreach ($photo as $photos)
                            <div class="carousel-item">
                                <img src="{{$photos->file}}" class="d-block w-100" alt="RentApp">
                            </div>
                            @endforeach
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    
                    <h5 style="font-family: Open Sans; font-weight:bold; font-size:30px; margin-top:15px;">{{$property->title}} </h5>
                    <hr>
                    
                    
                    <h6>by <span class="text-primary">{{$property->user->name}}</span> Posted {{$property->created_at->diffForHumans()}}</h6>
                    <hr class="my-2">
                    <h6>Price : &#8358;{{$property->amount}}</h6>
                    <hr class="my-1">
                    <div class="container my-1">
                        <div class="text-justify">
                            {{$property->description}}
                        </div>
                    </div>
                </div>
            </div>
  
        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">
  
          <!-- Search Widget -->
          <div class="card my-4">
           
            <div class="card-body">
              <h6>Regular Price : &#8358;{{$property->amount}}</h6>
              <ul class="list-group">
                <li class="list-group-item mt-2"><i class="fa fa-check"></i> Quality assured by RentApp</li>
                <li class="list-group-item">24/7 Customer Support</li>
                <li class="list-group-item">Posted {{$property->created_at->diffForHumans()}}</li>
                <li class="list-group-item">category : <span class="badge rounded-pill bg-primary">{{$property->category->name}}</span></li>
                <li class="list-group-item">Location : <span class="badge rounded-pill bg-primary">{{$property->location}}</span></li>
              </ul>
            </div>
          </div>

          <div class="card my-4">
            <h5 class="card-header">Pay for</h5>
            <div class="card-body">
              <button class="btn btn-primary">House evaluation</button> <button class="btn btn-primary">Add to Cart</button>
            </div>
          </div>
  
          <!-- Categories Widget -->
          <div class="card my-4">
            <h5 class="card-header">Categories</h5>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    @foreach ($category as $categories)
                    <li>
                      <a href="#">{{$categories->name}}</a>
                    </li>
                    @endforeach
                  </ul>
                </div>
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    @foreach ($location as $locations)
                    <li>
                      <a href="#">{{$locations->name}}</a>
                    </li>
                    @endforeach
                  </ul>
                </div>
              </div>
            </div>
          </div>
  
        </div>
  
      </div>
      <!-- /.row -->
  
    </div>
    @endsection
</x-home.home-master>