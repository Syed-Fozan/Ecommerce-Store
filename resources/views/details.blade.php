@extends('master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img class="details-img" src="{{ $Product['gallery'] }}" alt="{{ $Product['name'] }}">
            </div>
            <div class="col-sm-6">
                <a href="/"> Go Back</a>
                <h2> Name :-{{ $Product['name'] }}</h2>
                <p>Price :-{{ $Product['price'] }}</p>

                <p>Description:-{{ $Product['description'] }}</p>

                <p>Category:-{{ $Product['category'] }}</p>
                <br>
                <form action="/add_to_cart" method="POST">
                    @csrf
                    <input type='hidden' name='product_id' value={{$Product['id']}}>
                    <button class='btn btn-success'>
                        Add to Cart
                    </button>
                </form>
                <br><br>
                <button class='btn btn-primary'>
                    Buy Now</button>
            </div>
        </div>
    </div>
@endsection
