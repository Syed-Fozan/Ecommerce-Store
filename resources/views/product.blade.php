@extends('master')
@section('content')
<div class="container custom-product">
  <div id="demo" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
    </ul>
    <!-- The slideshow -->
    <div class="carousel-inner">
      @foreach ($products as $item)
      <div class="carousel-item {{$item['id']==1?'active':""}}">
        <a href="details/{{$item['id']}}">
        <img class="slider-img" src={{$item['gallery']}} alt={{$item['name']}}>
        <div class="carousel-caption">
        </div>
        </a>
      </div>
      @endforeach
      
   
    </div class='trending-wrapper '>
    <h1>Trendings<h1>
    @foreach ($trendings as $item)
    <div class='trending-side col-sm-4'>
    <a href="details/{{$item['id']}}">
    <img  class='trending-image' src="{{$item['img']}}" alt={{$item['name']}}>
        <h3>{{$item['name']}}</h3>   
    </a> 
    </div>  

    @endforeach
  </div>
    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  
  </div>
</div>
@endsection