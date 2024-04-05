@extends('layouts.app')
@section('main')
<div class="container-fluid my-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-dark text-white">
                    <h5 class="card-title mb-0">Sign In</h5>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
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
                        <button type="submit" class="btn btn-lg btn-primary">Sign In</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
