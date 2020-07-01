@extends('layouts.app')

@section('content')
<div class="container">
    @if ($orders != null)
        <table class="table mt-5">
            <tr>
                <th>Order ID</th>
                <th>Total Price</th>
            </tr>
            @foreach ($orders as $order)
                <tr class="order-list">
                    <td>{{ $order->id }}</td>
                    <td>&euro;{{ unserialize($order->cart)->getTotalPrice() }},-</td>
                </tr>
            @endforeach
        </table>
    @else
        <p class="mt-4 lead">No orders</p>
    @endif
</div>
@endsection
