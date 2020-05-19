@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
        <h1>Categories:</h1>
            <hr>
        @foreach ($categories as $category)
        <div class="category-container">
            <div class="row">
            <div class="col">
                <div class="row d-flex">
                    <div class="col">
                        <h2>{{$category->name}}</h2>
                        <p>{{$category->description}}</p>
                        <button class="mt-auto btn btn-danger"><a class="text-white text-decoration-none" href="category/{{$category->id}}">View products</a></button>
                    </div>

                    <div class="col d-flex flex-column">
                        <img class=" ml-auto category-image" src="https://picsum.photos/{{rand(150,200)}}/{{rand(150,200)}}" alt="">
                    </div>
                </div>
            </div>

            </div>
        </div>
        @endforeach
        </div>
    </div>
</div>
@endsection
