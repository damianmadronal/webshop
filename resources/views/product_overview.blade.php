@extends('layouts.app')

@section('content')
<div class="container">
 @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="row">
        <div class="col">

            <h1><a href="/category_overview"><i class="fas fa-arrow-left back-button"></i></a> {{$categoryName[0]}}</h1>
            <hr>

            <div class="grid-container">
                @foreach ($products as $product)
                    <div class="mb-5 card" style="width: 18rem;">
                        <a class="text-dark text-decoration-none" href="/product/{{$product->id}}">
                            <img class="card-img-top" src="https://picsum.photos/{{rand(445,460)}}/{{rand(445,460)}}" alt="category image">
                            <div class="card-body text-center">
                                <h2 class="card-title">{{ $product->name }}</h2>
                                <p class="short-text" class="card-text">{{ $product->description }}</p>
                                <button class="btn btn-danger"><a class="text-white text-decoration-none" href="{{ route('product.add', ['id' => $product->id]) }}">Add<i class="fas fa-shopping-cart"></i></a></button>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
