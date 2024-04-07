@extends('layouts.app')
@section('main')
    <div class="container">`
        <h1 class="text-center my-5">Register</h1>
        <form method="POST" action="{{ route('password.update') }}">
            @csrf
            <div class="mb-3">
                <input type="hidden" name="token" value="{{ $request->route('token') }}">
            </div>
            <div class="mb-3">
                <label for="task" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $request->email) }}">
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
            <button type="submit" class="btn btn-lg btn-primary">Reset Password</button>
        </form>
    </div>
@endsection
