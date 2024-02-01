@extends('partials.navbar')

@section('title', 'Update Food')

@section('content')

@include('partials.error')

@if (isset($success))
    <div class="row justify-content-center">
        <div class="col-4 position-absolute" style="z-index: 10000;">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Item updated!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    </div>
@endif

<div>
    <h1 class="text-center text-warning">更新食物 | Update Food</h1>
    <form action="{{ Request::url() }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="_method" value="PATCH">

        <div class="mb-3 mx-auto" style="text-align:left">
            <label for="name" class="form-label text-warning" style="font-size: 20px">Food Name</label>
            <input type="text" class="form-control" name="name" placeholder="Mininum 5 Characters" value="{{$food->name}}">
        </div>

        <div class="mb-3 mx-auto" style="text-align:left">
            <label for="brief_desc" class="form-label text-warning" style="font-size: 20px">Brief Description</label>
            <textarea type="text" class="form-control" name="brief_desc" placeholder="Maximum 100 characters">{{$food->brief_desc}}</textarea>
        </div>

        <div class="mb-3 mx-auto" style="text-align:left">
            <label for="full_desc" class="form-label text-warning" style="font-size: 20px">Full Description</label>
            <textarea type="text" class="form-control" name="full_desc" placeholder="Maximum 255 characters">{{$food->full_desc}}</textarea>
        </div>

        <div class="mb-3 mx-auto" style="text-align:left">
            <label for="category" class="form-label text-warning" style="font-size: 20px">Food Category</label>
            <br>
            <select class="mx-auto" name="category" style="font-size: 16px; width: 100%; height: 35px; padding-left: 8px">
                <option value="Main Course"
                @if ($food->category == "Main Course")
                    selected
                @endif
                >Main Course</option>
                <option value="Beverages"
                @if ($food->category == "Beverages")
                    selected
                @endif>
                Beverages</option>
                <option value="Dessert" 
                @if ($food->category == "Dessert")
                    selected
                @endif>Dessert</option>
            </select>
        </div>

        <div class="mb-3 mx-auto" style="text-align:left">
            <label for="price" class="form-label text-warning" style="font-size: 20px">Price</label>
            <input type="number" class="form-control" name="price" value="{{$food->price}}">
        </div>

        <div class="mb-3 mx-auto">
            <label for="image" class="form-label text-warning" style="font-size: 20px">Food Image</label>
            <input class="form-control" type="file" id="image" name="image" value="{{ $food->image }}">
        </div>

        <div class="col-12 text-end mb-4">
            <button type="submit" class="btn btn-dark float-right">Update Food</button>
        </div>
    </form>
</div>

@endsection