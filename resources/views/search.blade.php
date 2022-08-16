@extends('master')
@section('content')
<div class="custom-product">
    <div class='trending-wrapper'>
    <h1>Results for Products<h1>
    @foreach ($products as $item) 
    <div class='searched-item'>
    <a href="details/{{$item['id']}}">
    <img  class='trending-image' src="{{$item['gallery']}}" alt={{$item['name']}}>
    <div class="">
        <h2>{{$item['name']}}</h2> 
        <h5>{{$item['description']}}</h5> 

    </div>  
    </a> 
    </div>  
    @endforeach 
  </div>
</div>
@endsection