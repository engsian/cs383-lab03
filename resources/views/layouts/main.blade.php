<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> 
    <title>Home</title>
</head>
<body>
<div class="p-5 bg-primary text-white text-center">
    <h1>{{ strtoupper($page) }}</h1>
    @yield('title')
  <p>{{ date('d-M-Y, h:i:s', $now) }}</p> 
</div>

@php
    $home_active = '';
    $product_active = '';
    $price_active = '';
    $contact_active = '';

    if($page == 'home') {
        $home_active = 'active';
    } elseif($page == 'product') {
        $product_active = 'active';
    } elseif($page == 'price') {
        $price_active = 'active';
    } else {
        $contact_active = 'active';
    }
@endphp

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link {{ $home_active }}" href="{{ url('/') }}">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ $product_active }}" href="{{ url('/product') }}">Product</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ $price_active }}" href="{{ url('/price') }}">Price</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ $contact_active }}" href="{{ url('/contact') }}">Contact</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container mt-5">
  <div class="row">
    <div class="col-sm-4">
      <h2>About Me</h2>
      <h5>Photo of me:</h5>
      <div class="fakeimg">Fake Image</div>
      <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
      <h3 class="mt-4">Some Links</h3>
      <p>Lorem ipsum dolor sit ame.</p>
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a class="nav-link {{ $home_active }}" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ $product_active }}" href="#">Product</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ $price_active }}" href="#">Price</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ $contact_active }}" href="#">Contact</a>
        </li>
      </ul>
      <hr class="d-sm-none">
    </div>
    <div class="col-sm-8">
        @yield('content')
    </div>
  </div>
</div>

<div class="mt-5 p-4 bg-dark text-white text-center">
  <p>Footer</p>
</div>

</body>
</html>