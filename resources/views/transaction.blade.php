@extends('partials.navbar')

@section('title', 'Transaction History')

@section('content')

<div style="margin-left: 100px; margin-right: 100px">
    <h1 class="text-warning" style="margin-bottom: 30px; padding-top: 20px">交易记录 | Transaction History</h1>
    
    <ul>
        @if (sizeof($transaction) == 0)
            <div class="card mx-auto" style="width: 70vw; display:flex; align-items: center; background-color: black; color: white; justify-content: center; margin-top: 100px">
                <div class="card-body">
                    <h3 class="mx-auto text-warning" style="text-align: center">There are no transactions yet...</h3>
                    <div style="font-size: 18px; margin-left:30px; margin-right: 30px; margin-top: 15px">
                        Poof! Transaction history gone. Time to make delicious memories all over again. Let's fill this blank page
                        with savory stories and culinary adventures. Bon appétit!
                    </div>
                </div>
            </div>
        @else
        <table class="table table-bordered" style="border-color:black; ">
            <thead class="table" style="background-color: black">
                <tr class="table text-warning" style="background-color: black; text-align: center; border-color:black">
                    <th scope="col">Transaction ID</th>
                    <th scope="col">Purchase Date</th>
                    <th scope="col">Food Name</th>
                    <th scope="col">Total Price</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($transaction as $transaction)
                <tr class="align-middle text-light" style="background-color: dimgrey; text-align: center; font-weight: bold">
                    <td>TR{{str_pad($transaction->transactionHeader->id, 3, "0", STR_PAD_LEFT)}}</td>
                    <td>{{date_format($transaction->created_at, "Y-m-d")}}</td>
                    <td>{{$transaction->food_name}} [x{{$transaction->quantity}}]</td>
                    <td>Rp {{$transaction->food_price * $transaction->quantity}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @endif
    </ul>
</div>

@endsection