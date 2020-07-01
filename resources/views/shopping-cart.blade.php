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
        @if($cart != null)
            @foreach($cart->items as $product)
                <div class="cart-item-container">
                    <div class="row py-5">
                        <div class="col">
                            <img src="{{ asset("img/middlefinger.png") }}" height="150" width="200" alt="cart-item-image">
                        </div>
                        <div class="col">
                            <h2>{{$product['item']->name}}</h2>
                        </div>
                        <div class="col">
                            <form action="{{ route('shoppingCart.update', $product["item"]->id) }}" method="POST">
                            @csrf
                            <input id="quantityInput" class="quantityInput" name="quantityInput" type="number" size="20" value="{{ $product["quantity"] }}">
                            <input class="btn btn-primary" type="submit" value="Apply" >
                        </form>
                        </div>
                        <div class="col">
                            <p><strong>&euro;{{$product['price']}},-</strong></p>
                        </div>
                        <div class="col">
                        <p class="delete-button"><a href="{{ route('product.delete', ['id' => $product['item']->id]) }}"><i class="fab fa-xbox"></i></a></p>
                        </div>
                    </div>
                </div>
                <hr>
            @endforeach
            <div class="order-container">
                <div class="row order-details">
                    <div class="col">
                        <p>Total products ({{$cart->getTotalQuantity()}}) - <strong>&euro;{{$cart->getTotalPrice()}}</strong></p>
                        <button type="button" class="btn btn-danger"><a href="{{ route('product.order') }}">Order</a></button>
                    </div>
                </div>
            </div>
    @else
    <p><small>No items found</small></p>
        @endif
        </div>
    </div>
</div>
@endsection
