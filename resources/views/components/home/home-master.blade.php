<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href="{{asset('css/bootstrap.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
</head>
<body style="background:ghostwhite;">

<nav class="navbar navbar-expand-lg sticky-top shadow-sm navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('home')}}">RentApp</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        @if(Auth::check())
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
          <a class="nav-link" href="#">About</a>
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
          <a class="nav-link" href="/register">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/login">Login</a>
        </li>
        @endif

       
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>


  

{{-- <div class="container">
  <div class="row">
    <div class="mb-4" style="margin-top: 50px;">
      <h1 class="my-4 text-center"><strong class="fw-bold">Find A Place To Call Home</strong></h1>
      <p class="text-center lead">Your Property, Our Priority and From as low as 50k per year with limited time offer discounts</p>
    </div>
  </div>
</div> --}}

<div class="" style="margin-bottom: 50px;">
  @yield('content')
</div>


<nav class="navbar sticky-bottom navbar-light bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand text-center text-light" href="#">&copy;Oliver's Concept 2022</a>
  </div>
</nav>

<script src="{{asset('js/bootstrap.js')}}"></script>
</body>
</html>