@extends('master')
@section('content')
<div class="container custom-login">
<div class="row">
<div class="col-sm-4 col-sm-offset-4">
<form action="login" method="POST">
    <div class="form-group">
      @csrf
      <label>Email address</label>
      <input type="email"  name ='email'class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      
    </div>
    <div class="form-group">
      <label>Password</label>
      <input type="password" name='password' class="form-control" id="exampleInputPassword1">
    </div>
    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
</div>
</div>
@endsection