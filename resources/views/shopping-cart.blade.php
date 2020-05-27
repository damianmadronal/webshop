@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
        @if(Session::has('cart'))
            @foreach($products as $product)
                <div class="cart-item-container">
                    <div class="row py-5">
                        <div class="col">
                            <img src="{{ asset("img/middlefinger.png") }}" height="150" width="200" alt="cart-item-image">
                        </div>
                        <div class="col">
                            <h2>{{$product['item']->name}}</h2>
                        </div>
                        <div class="col">
                            <p>{{$product['quantity']}}</p>
                        </div>
                        <div class="col">
                            <p><strong>&euro;{{$product['price']}}</strong></p>
                        </div>
                    </div>
                </div>
                <hr>
            @endforeach
            <div class="order-container">
                <div class="row order-details">
                    <div class="col">
                        <p>Total products ({{$totalQuantity}}) - <strong>&euro;{{$totalPrice}}</strong></p>
                        <button type="button" class="btn btn-danger">Order</button>
                    </div>
                </div>
            </div>


        @endif
        </div>
    </div>
</div>
@endsection
