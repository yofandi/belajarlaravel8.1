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
                    @if (session('status'))
                    <div class="alert alert-success">
                        A fresh verification link has been sent to your email
                    </div>
                    @endif


                    before procceding, please check your email for verification.
                    Or <form method="POST" action="{{ route('verification.send') }}">
                        @csrf
                        <button type="submit" class="btn btn-link align-baseline">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
