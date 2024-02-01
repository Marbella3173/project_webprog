@extends('partials.navbar')

@section('title', 'User Profile')

@section('content')

<h1 class="text-center text-warning" style="margin-bottom: 20px">用户个人资料 | User Profile</h1>

<div class="card bg-dark text-light col-11 mx-auto mb-3">
    <div class="row g-0">
        <div class="col-md-4">
            <img src="/assets/User/{{ $user->image }}" class="img-fluid rounded-start" alt="No Picture Found" style="object-fit: cover; height: 100%">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h3 class="card-title" style="text-align: center">{{ $user->username }}</h3>
                <p class="card-text">
                    <ul class="list-unstyled">
                        <li class="text-warning" style="font-size: 22px">Email:</li>
                        <li style="font-size: 18px">{{ $user->email }}</li>
                    </ul>
                    <ul class="list-unstyled">
                        <li class="text-warning" style="font-size: 22px">Phone Number:</li>
                        <li style="font-size: 18px">{{ $user->phone }}</li>
                    </ul>
                    <ul class="list-unstyled">
                        <li class="text-warning" style="font-size: 22px">Address:</li>
                        <li style="font-size: 18px">{{ $user->address }}</li>
                    </ul>
                    <a href="/settings"><button type="button" class="btn btn-secondary text-warning" style="font-weight: bold">Edit</button></a>
                </p>
            </div>
        </div>
    </div>
</div>

@endsection