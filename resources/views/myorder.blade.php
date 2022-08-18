@extends('master')
@section('content')
<div class="custom-product">
    <div class='col-sm-10'>
    <div class='trending-wrapper'>
    <h2>My Order<h2>
    <div class="">
    @foreach ($order as $item) 
    <div class='row-searched-item'>
    <div class='col-sm-3'>    
    <a href="myorder/{{$item->id}}">
    <img  class='trending-image' src="{{$item->gallery}}" alt={{$item->name}}>
   </a>
    </div>
    <div class='col-sm-3'>
    <div class="">
    <h2>{{$item->name}}</h2> 
    <h5>{{$item->description}}</h5>    
    </div>  
    </div>  
    <div class='col-sm-3'>
        <div class="">
   
        </div>  
        </div> 
    
    @endforeach 
  </div>
</div>
</div>
    </div>
 
@endsection