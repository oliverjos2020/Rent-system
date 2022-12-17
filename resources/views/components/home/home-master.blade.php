<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href="{{asset('css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
  <link href="{{asset('font-awesome/css/font-awesome.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
</head>
<body style="background:white;">


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
    <h6 class="text-center text-light my-2">&copy; Oliver's Concept 2022</h6>
  </div>
</nav>

<script src="{{asset('js/bootstrap.js')}}"></script>
</body>
</html>