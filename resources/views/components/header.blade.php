<?php
use App\Http\Controllers\ProductController;
$total=0;
if (Session::has('user'))
{
$total=ProductController::cartItem();
}

?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark header-height">
    <a class="navbar-brand" href="/">Ecommerce Store</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="">Home</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="contact">Contact Us</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="myorder">Order</a>
        </li> 
      </ul>
      
    </ul>
    
      <form action="/search" class="form-inline my-2 my-lg-0 active d-flex align-items-left">
        <input class="form-control mr-sm-2 search-box" name="query" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
    <li class="nav-item active d-flex align-items-center">
      <a class="nav-link" href="cartlist">Cart({{$total}})</a>
    </li>
    @if(Session::has('user'))
    <li class="nav-item dropdown d-flex align-items-center">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
       {{Session('user')['name']}}
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        <a class="dropdown-item" href="logout">Logout</a>
      </div>
    </li>
    @else
    <li class="nav-item active d-flex align-items-center">
      <a class="nav-link" href="register">Register</a>
    </li>
    <a class="nav-link" href="login">Login</a>
    @endif
    
  </nav>