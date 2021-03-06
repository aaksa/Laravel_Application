@extends('master')

@section('content')

<div class="container p-3 " >
    <div class="row">
        <div class="col-sm-6">
            <img class="detail-img" src="{{ $product['gallery'] }}" alt="">
        </div>
        <div class="col-sm-6">
            <a href="/"> Go back </a>
            <h2>{{ $product['name'] }}</h2>
            <h3>Price : {{ $product['Price'] }} </h3>
            <h4>Detail : {{ $product['description'] }} </h4>
            <h4>Category  : {{ $product['category'] }}</h4>
            <br></br>
            <button class="btn btn-primary" > Add to Cart </button>
            <br></br>
            <button class="btn btn-success" > Buy Now</button>
            <br></br>
        </div>

    </div>
</div>

@endsection