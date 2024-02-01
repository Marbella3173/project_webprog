@extends('partials.navbar')

@section('title', 'Food Description')

@section('content')

@if (isset($success))
    <div class="row justify-content-center">
        <div class="col-4 position-absolute" style="z-index: 10000;">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Item added to your cart!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    </div>
@endif

<h1 class="text-center text-warning" style="margin-bottom: 20px">食物细节 | Food Detail</h1>

<div class="card text-white col-11 mx-auto bg-dark mb-3">
    <div class="row g-0">
        <div class="col-md-6">
            <img src="/assets/Food/{{ $food->image }}" class="img-fluid rounded-start" alt="No Picture Found" style="object-fit: cover; height: 100%">
        </div>
        <div class="col-md-6">
            <div class="card-body">
                <h3 class="card-title text-warning">{{ $food->name }}</h3>
                <p class="card-text">
                    <ul class="list-unstyled">
                        <li class="text-warning" style="font-size: 22px">Food Type:</li>
                        <li style="font-size: 18px">{{ $food->category }}</li>
                    </ul>
                    <ul class="list-unstyled">
                        <li class="text-warning" style="font-size: 22px">Food Price:</li>
                        <li style="font-size: 18px">Rp {{ $food->price }}</li>
                    </ul>
                    <ul class="list-unstyled">
                        <li class="text-warning" style="font-size: 22px">Brief Description:</li>
                        <li style="font-size: 18px">{{ $food->brief_desc }}</li>
                    </ul>
                    <ul class="list-unstyled">
                        <li class="text-warning" style="font-size: 22px">About This Food</li>
                        <li style="font-size: 18px">{{ $food->full_desc }}</li>
                    </ul>

                    @auth
                    @if (!Gate::allows('admin'))
                    <form action="/food/{{$food->id}}" method="POST">
                        @csrf
                        <button class="btn btn-secondary mt-3 text-warning" style="font-size: 18px; font-weight: bold">Add to Cart</button>
                    </form>
                    @endif
                    @endauth
                </p>
            </div>
        </div>
    </div>
</div>
@endsection