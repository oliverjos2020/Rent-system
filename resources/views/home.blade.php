<x-home.home-master>
    @section('content')

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/slide-1.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h1 style="text-shadow:1px 1px rgba(3, 3, 3, 0.5); margin-bottom:7.5rem;text-transform:uppercase; font-family:Open Sans; font-sizes:60px; colors:#333;">Find A Place To Call Home</h1>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/slide-2.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h1 style="text-shadow:1px 1px rgba(0,0,0,0.5); margin-bottom:7.5rem;text-transform:uppercase;">Second slide label</h1>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/slide-3.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h1 style="text-shadow:1px 1px rgba(0,0,0,0.5); margin-bottom:7.5rem;text-transform:uppercase;">Third slide label</h1>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <div class="container">
      <div class="row" style="margin-top: 50px">
  
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

          <div class="d-flex"><div class="mx-auto">{{$property->links()}}</div></div>
  
          <!-- Pagination -->
          {{-- <ul class="pagination justify-content-center mb-4">
            <li class="page-item">
              {{$property->render()}}
            </li>

          </ul> --}}
  
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
    @endsection
</x-home.home-master>