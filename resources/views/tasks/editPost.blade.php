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
        <h1 class="text-center my-5">Edit Task : </h1>
        <form method="post" action="{{ route('tasks.update', ['id',$data->id]) }}">
            @method('PATCH')
            @csrf
            <input type="hidden" class="form-control" id="id" name="id" value="{{ $data->id }}">
            <div class="mb-3">
                <label for="user" class="form-label">User</label>
                <input type="text" class="form-control" id="user" name="user" value="{{ $data->user }}">
                @error('user')    
                <span class="text-danger">
                    {{$message}}
                </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="task" class="form-label">Task</label>
                <input type="text" class="form-control" id="task" name="task" value="{{ $data->task }}">
                @error('task')    
                <span class="text-danger">
                    {{$message}}
                </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="label" class="form-label">Label</label>
                <input type="text" class="form-control" id="label" name="label" value="{{ $data->label }}">
                @error('label')    
                <span class="text-danger">
                    {{$message}}
                </span>
                @enderror
            </div>
            <button type="submit" class="btn btn-lg btn-primary">Update</button>
        </form>

        <form method="POST" action="{{ route('tasks.destroy', ['id' => $data->id]) }}">
            @method('DELETE')
            @csrf
            <button class="btn btn-lg btn-danger" type="submit">Delete</button>
        </form>
        <a href="{{ route('tasks.index') }}" class="btn btn-lg btn-white">Back</a>
    </div>
@endsection
