@extends('partials.navbar')

@section('title', 'Your Cart')

@section('content')

<div style="margin-left: 100px; margin-right: 100px">
    <h1 class="text-warning" style="margin-bottom: 30px; padding-top: 20px">你的购物车 | Your Cart</h1>
    
    @if(sizeof($list) == 0)
    <div class="container text-center">
        <div class="row align-items-center">
            <div class="card mx-auto d-flex align-items-center justify-content-center" style="width: 70vw; background-color: black; color: white; vertical-align: middle; margin-top: 100px">           
                <div class="card-body">
                    <h3 class="mx-auto text-warning" style="text-align: center">Your cart is empty...</h3>
                    <div style="font-size: 18px; margin-left: 30px; margin-right: 30px; margin-top: 15px">
                        Looks like your cart is on a diet! Don't worry, our delicious dishes are just a few clicks away. 
                        Start filling up your cart and let the feast begin!
                    </div>
                </div>
            </div>
        </div>
    </div>
    @else
    <table class="table table-bordered" style="border-color: black">
        <thead class="table" style="background-color: black">
            <tr class="table text-warning" style="text-align: center; background-color: black; border-color:black">
                <th scope="col">Food</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Total</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($list as $item)
            <tr class="align-middle text-light" style="background-color: dimgrey; text-align: center; font-weight: bold">
                <td>{{ $item->food->name }}</td>
                <td>{{ $item->food->price }}</td>
                <td><form action="/cart" method="POST">
                    @csrf
                    <input type="hidden" name="food_id" value={{$item->food->id}}>
                    <button class ="minus bg-dark text-light" name="action" value="less">-</button>
                    {{ $item->quantity }}
                    <button class ="plus bg-dark text-light" name="action" value="more">+</button>
                </form></td>
                <td>{{ $item->food->price * $item->quantity }}</td>
                <td><form action="/cart" method="POST">
                    @csrf
                    <input type="hidden" name="action" value="delete">
                    <input type="hidden" name="remove_id" value={{$item->food->id}}>
                    <button type="submit" class="btn btn-dark text-warning">Remove</button></form></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="text-end">
        <span style="text-align: right; color: white; font-size: 30px; font-weight: bold">Total Price: ${{ $total }}</span>
        <br>
        <a href="/checkout"><button class="btn btn-dark mt-2 text-warning" style="background-color: #545454">Proceed to Checkout</button></a>
    </div>
    @endif
</div>

@endsection