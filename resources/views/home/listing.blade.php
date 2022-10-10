<x-home.home-master>
    @section('content')
    <div class="container-fluid" style="background-image:url({{asset('images/bg-background.jpg')}}); background-size:cover; background-position:center; padding:80px;">
        <div class="row">
          <div class="mb-3" style="margin-top: 0px;">
            <h1 class="my-3 text-center" style="background:#6d7075mm; padding:10px; font-family:futura md bt; font-weight:bold; color:rgb(255, 255, 255); text-transform:uppercase;"><strong class="fw-bold text-light">Listings</strong></h1>
            <p class="text-center fw-bold text-light">Your Property, Our Priority and From as low as 50k per year with limited time offer discounts</p>
          </div>
        </div>
      </div>
      
        <!-- Page Content -->
        <div class="container">
      
          <div class="row">
      
            <!-- Blog Entries Column -->
            <div class="col-md-9 my-4">
      
              <!-- Blog Post -->
              <div class="row">
                @foreach ($property as $properties)
                <div class="col-lg-4">
                  <div class="card mb-4 shadow-sm">
                    <a href="{{route('home.single', $properties->id)}}" style="text-decoration: none;" class="text-dark">
                    <img class="card-img-top" src="{{$properties->featured_image}}" alt="Card image cap">
                    <div class="card-body">
                      <h6 class="card-title">{{Str::limit($properties->title, '22', '...')}}</h6>
                      <p class="card-subtitle mb-2 text-muted" style="font-size:16px">by : {{$properties->user->name}}</p>
                    </div>
                    <div class="card-footer text-muted">
                      &#8358;{{$properties->amount}}
                    </div>
                    </a>
                  </div>
                </div>
                @endforeach
              </div>
      
              <!-- Pagination -->
              <div class="d-flex"><div class="mx-auto">{{$property->links()}}</div></div>
      
            </div>
      
            <!-- Sidebar Widgets Column -->
            <div class="col-md-3">
      
              <!-- Search Widget -->
              <div class="card my-4">
                <h5 class="card-header">Search</h5>
                <div class="card-body">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-secondary" type="button">Go!</button>
                    </span>
                  </div>
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
                          <a href="{{route('home.sort', $categories->id)}}">{{$categories->name}}</a>
                        </li>
                        @endforeach
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card my-4">
                <h5 class="card-header">Locations</h5>
                <div class="card-body">
                  <div class="row">
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
      
              <!-- Side Widget -->
              <div class="card my-4">
                <h5 class="card-header">Side Widget</h5>
                <div class="card-body">
                  You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
                </div>
              </div>
      
            </div>
      
          </div>
          <!-- /.row -->
      
        </div>
        <!-- /.container -->
      
    @endsection
</x-home.home-master>