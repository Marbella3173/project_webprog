@extends('partials.navbar')

@section('title', 'Home Page')

@section('content')

@if (isset($success))
    <div class="row justify-content-center">
        <div class="col-4 position-absolute" style="z-index: 10000;">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Transaction success!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    </div>
@endif

    <h1 class="text-warning" style="margin-bottom: 25px">菜单 | Menu</h1>

    <button onclick="main_course()" type="button" class="btn btn-dark text-warning" style="font-size: 15px">主菜 | Main Course</button>
    <button onclick="beverage()" type="button" class="btn btn-dark text-warning" style="font-size: 15px">饮料 | Beverages</button>
    <button onclick="dessert()" type="button" class="btn btn-dark text-warning" style="font-size: 15px">甜点 | Desserts</button>

    <div id="main-heading">
        <div class="card mx-auto" style="margin-top: 10px; margin-bottom: 10px; align-items: center; background-color: black">
            <h4 class="text-center text-warning" style="padding: 15px">主菜 | Main Course</h4>
        </div>
    </div>

    <div class=grid id="main-grid">
        <div class=row>
            @foreach ($main_course as $main_dish)
            <div class="col-4">
                <a href="/food/{{$main_dish->id}}">
                <button class="btn btn-dark active" type="button" style="background-color: black; margin-top: 10px; margin-bottom: 10px" >
                    <img src="/assets/Food/{{$main_dish->image}}" style="height: 215px; width: 390px; object-fit: cover">
                    <p class="text-warning" style="margin: auto; font-size: 20px">{{$main_dish->name}}</p>
                </button>
                </a>
            </div>
            @endforeach
        </div>
    </div>

    <div id="beverage-heading">
        <div class="card mx-auto" style="margin-top: 10px; margin-bottom: 10px; align-items: center; background-color: black">
            <h4 class="text-center text-warning" style="padding: 15px">饮料 | Beverages</h4>
        </div>
    </div>

    <div class=grid id="beverage-grid">
        <div class=row>
            @foreach ($beverages as $beverage)
            <div class="col-4">
                <a href="/food/{{$beverage->id}}">
                <button class="btn btn-dark active" type="button" style="background-color: black; margin-top: 10px; margin-bottom: 10px" >
                    <img src="/assets/Food/{{$beverage->image}}" style="height: 215px; width: 390px; object-fit: cover">
                    <p class="text-warning" style="margin: auto; font-size: 20px">{{$beverage->name}}</p>
                </button>
                </a>
            </div>
            @endforeach
        </div>
    </div>

    <div id="dessert-heading">
        <div class="card mx-auto" style="margin-top: 10px; margin-bottom: 10px; align-items: center; background-color: black">
            <h4 class="text-center text-warning" style="padding: 15px">甜点 | Desserts</h4>
        </div>
    </div>

    <div class=grid id="dessert-grid">
        <div class=row>
            @foreach ($dessert as $dessert)
            <div class="col-4">
                <a href="/food/{{$dessert->id}}">
                <button class="btn btn-dark active" type="button" style="background-color: black; margin-top: 10px; margin-bottom: 10px" >
                    <img src="/assets/Food/{{$dessert->image}}" style="height: 215px; width: 390px; object-fit: cover">
                    <p class="text-warning" style="margin: auto; font-size: 20px">{{$dessert->name}}</p>
                </button>
                </a>
            </div>
            @endforeach
        </div>
    </div>

    <script src="/script.js"></script>
@endsection
