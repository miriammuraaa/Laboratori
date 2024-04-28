<!-- @extends ('layouts.app')

@section('title', 'Login')

@section('content')

<div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200
rounded-1g shadow-1g">
    <h1 class="text-3xl text-center font-bold">Login</h1>
    <form class="mt-4" method="POST" action="">
        @csrf
        <input type="email" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Email" id="email" name="email">
        <input type="password" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Password" id="password" name="password">

        @error('message')
            <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">* {{$message}}</p>
        @enderror

        <button type="submit" class="rounded-md bg-indigo-500 w-full text-lg text-white font-semibold p-2 my-3 hover:bg-indigo-600">Send</button>
    </form>
</div>

@endsection -->
@extends('layouts.app')

@section('title', 'Login')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h1 class="text-center font-weight-bold">Login</h1>
                </div>
                <div class="card-body">
                    <form method="POST" action="">
                        @csrf
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                        </div>

                        @error('message')
                        <p class="alert alert-danger">{{$message}}</p>
                        @enderror

                        <button type="submit" class="btn btn-primary btn-block">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
