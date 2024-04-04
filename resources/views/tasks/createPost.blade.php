@extends('layouts.app')
@section('main')
    <div class="container">
        {{-- alert for notice validate --}}
        @if ($errors->any())
            <div class="alert alert-danger mt-3">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
`
        <h1 class="text-center my-5">Tambah Task</h1>
        <form method="POST" action="{{ route('tasks.store') }}">
            @csrf
            <div class="mb-3">
                <label for="user" class="form-label">User</label>
                <input type="text" class="form-control" id="user" name="user" value="{{ old('user') }}">
                @error('user')    
                <span class="text-danger">
                    {{$message}}
                </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="task" class="form-label">Task</label>
                <input type="text" class="form-control" id="task" name="task" value="{{ old('task') }}">
                @error('task')    
                <span class="text-danger">
                    {{$message}}
                </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="label" class="form-label">Label</label>
                <input type="text" class="form-control" id="label" name="label" value="{{ old('label') }}">
                @error('label')    
                <span class="text-danger">
                    {{$message}}
                </span>
                @enderror
            </div>
            <button type="submit" class="btn btn-lg btn-primary">Submit</button>
        </form>
    </div>
@endsection
