@extends('layouts.app')
@section('main')
    <div class="container">`
        <h1 class="text-center my-5">Register</h1>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="mb-3">
                <label for="user" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                @error('name')
                <span class="text-danger">
                    {{$message}}
                </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="task" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
                @error('email')
                <span class="text-danger">
                    {{$message}}
                </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="label" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" value="{{ old('password') }}">
                @error('password')
                <span class="text-danger">
                    {{$message}}
                </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="label" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="confirmPassword" name="password_confirmation">
            </div>
            <button type="submit" class="btn btn-lg btn-primary">Register</button>
        </form>
    </div>
@endsection
