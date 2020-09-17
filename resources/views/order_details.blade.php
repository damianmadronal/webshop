@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Order overview of order number: {{$orderId}}</h1>
@foreach ($order as $orderDetail)
     <div class="category-container">
            <div class="row">
            <div class="col">
                <div class="row d-flex">
                    <div class="col">
                        <h2>{{$orderDetail->name}}</h2>
                        <p class="text-muted text-small">{{$orderDetail->description}}</p>
                        <p>amount: {{$orderDetail->pivot->quantity}}</p>
                        <p><strong>&euro; {{$orderDetail->pivot->price}} ,-</strong></p>
                    </div>

                    <div class="col d-flex flex-column">
                        <img class=" ml-auto category-image" src="{{asset("img/doctor.jpg") }}" height="200" alt="">
                    </div>
                </div>
            </div>

            </div>
        </div>
@endforeach
</div>
@endsection
