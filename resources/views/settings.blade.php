@extends('partials.navbar')

@section('title', 'Edit Profile')

@section('content')

@include('partials.error')

@if (isset($success))
    <div class="row justify-content-center">
        <div class="col-4 position-absolute" style="z-index: 10000;">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Edit profile success!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    </div>
@endif

    <div>
        <div class="row mx-5">
            <h1 class="text-center text-warning">编辑个人资料 | Edit Profile</h1>

            <form action="/settings" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="_method" value="PATCH">

                <div class="mb-4 text-warning">
                    <label for="username" class="form-label" style="font-size: 20px">Username</label>
                    <input type="text" class="form-control" id="username" placeholder="Minimum 5 Characters" name="username" value="{{ $user->username }}">
                </div>
                <div class="mb-4 text-warning">
                    <label for="email" class="form-label" style="font-size: 20px">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Must be end with '@gmail.com'" name="email" value="{{ $user->email }}">
                </div>
                <div class="mb-4 text-warning">
                    <label for="phone" class="form-label" style="font-size: 20px">Phone Number</label>
                    <input type="number" class="form-control" id="phone" placeholder="Must Contains 12 Numbers" name="phone" value="{{ $user->phone }}">
                </div>
                <div class="mb-4 text-warning">
                    <label for="address" class="form-label" style="font-size: 20px">Address</label>
                    <input type="text" class="form-control" id="address" placeholder="Do not have to be filled, Minimum 5 Characters" name="address" value="{{ $user->address }}">
                </div>
                <div class="mb-4 text-warning">
                    <label for="image" class="form-label" style="font-size: 20px">New Profile Image</label>
                    <input class="form-control" type="file" id="image" name="image" value="{{ $user->image }}">
                </div>
                <div class="mb-4 text-warning">
                    <label for="currPass" class="form-label" style="font-size: 20px">Current Password</label>
                    <input type="text" class="form-control" id="currPass" placeholder="Has to be the same with previous password" name="currPass" value="{{ $user->currPass }}">
                </div>
                <div class="mb-4 text-warning">
                    <label for="newPass" class="form-label" style="font-size: 20px">New Password</label>
                    <input type="text" class="form-control" id="newPass" placeholder="Minimum 5 Characters" name="newPass" value="{{ $user->newPass }}">
                </div>
                <div class="mb-4 text-warning">
                    <label for="confPass" class="form-label" style="font-size: 20px">Confirm Password</label>
                    <input type="text" class="form-control" id="confPass" placeholder="Has to be the same with New Password Field" name="confPass" value="{{ $user->confPass }}">
                </div>
                <div class="col-12 text-end mb-4 text-warning">
                    <button type="submit" class="btn btn-dark text-warning float-right">Update Profile</button>
                </div>
            </form>
        </div>
    </div>

@endsection