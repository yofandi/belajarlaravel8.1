@extends('layouts.app')
@section('main')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4 offset-md-2 py-3">
                <a href="{{ route('tasks.create') }}" class="btn btn-success"><i></i>Tambah Postingan</a>
            </div>
            <div class="col-md-4 offset-md-2 py-3">
                Tasks List : {{ $datas->total() }}
            </div>
            <div class="col-md-8 offset-md-2">
                <!-- Task List -->
                @foreach ($datas as $data)
                    <div class="task-card">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">{{ $data->task }}</h5>
                                <p class="card-text">{{ $data->label }}</p>
                                <a href="#" class="btn btn-primary">Read More</a>
                                <a href="{{ route('tasks.edit', ['id' => $data->id]) }}" class="btn btn-warning">Edit</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                <br>
                {{-- pagination data --}}
                {{ $datas->links('pagination::bootstrap-4') }}
                <!-- Add more task cards here -->
            </div>
        </div>
    </div>
@endsection
