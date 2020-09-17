@extends('layouts.app')

@section('content')
<div class="container">
    @if ($orders != null)
        <table class="table mt-5">
            <tr>
                <th>Order ID</th>
                <th>Total Price</th>
            </tr>
            {{-- {{dd($orders)}} --}}
            @foreach ($orders as $order)
                <tr class="order-list">
                    <td><a href="/order/{{$order->id}}">{{ $order->id }}</a></td>
                    <td>&euro;{{$order->total_price}},-</td>
                </tr>
            @endforeach
        </table>
    @else
        <p class="mt-4 lead">No orders</p>
    @endif
</div>
@endsection
