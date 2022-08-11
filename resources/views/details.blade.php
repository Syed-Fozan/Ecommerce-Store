@extends('master')
@section('content')
<div class="container">
<div class="row">
<div class="col-sm-6">
<img src="{{$Product['gallery']}}" alt="{{$Product['name']}}">
</div>
<div class="col-sm-6">
    <h2> Name :-{{$Product['name']}}</h2>
    <p>Price :-{{$Product['price']}}</p>

    <p>Description:-{{$Product['description']}}</p>

    <p>Category:-{{$Product['category']}}</p>

</div>
</div> 
</div>
@endsection