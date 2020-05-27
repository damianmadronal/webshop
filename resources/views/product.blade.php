@extends('layouts.app')

@section('content')
<div class="container">
@if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
<h1><a href="/category/{{$product->category_id}}"><i class="fas fa-arrow-left back-button"></i></a></h1>
            <hr>
    <div class="row">
        <div class="col">
            <h1>{{$product->name}}</h1>
            <p>{{$product->description}}</p>
            <p class="price"><strong>&euro;{{$product->price}}</strong></p>
            <button class="btn btn-danger"><a class="text-white text-decoration-none" href="{{ route('product.add', ['id' => $product->id]) }}">Add to Cart</a></button>
        </div>
        <div class="col">
            <img src="https://picsum.photos/450/450" alt="product-image">
        </div>
    </div>
</div>
@endsection
