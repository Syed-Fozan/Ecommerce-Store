@extends('master')
@section('content')
<div class="custom-product">
    <div class='col-sm-10'>
    <div class='trending-wrapper'>
    <h2>Cart Item<h2>
    <a  href="ordernow" class="btn btn-success">Order Now</a><br><br>
    <div class="">
    @foreach ($products as $item) 
    <div class='row-searched-item'>
    <div class='col-sm-3'>    
    <a href="cartlist/{{$item->id}}">
    <img  class='trending-image' src="{{asset($item->gallery)}}" alt={{$item->name}}>
   </a>
    </div>
    <div class='col-sm-4'>
    <div class="">
    <h2>{{$item->name}}</h2> 
    <h5>{{$item->description}}</h5>    
    </div>  
    </div>  
    <div class='col-sm-4'>
        <div class="">
       <a href="removecart/{{$item->cart_id}}" class="btn btn-success">Remove Item</a>  
        </div>  
        </div> 
    
    @endforeach 
  </div>
</div>
</div>
    </div>
    <a href="ordernow" class="btn btn-success">Order Now</a><br><br>
@endsection