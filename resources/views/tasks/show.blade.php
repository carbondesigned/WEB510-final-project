@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>{{ $task->title }}</h1>
                <p>{{ $task->description }}</p>
                <p>Status: {{ $task->status }}</p>
                <a href="{{ route('tasks.index') }}" class="btn btn-primary">Back to Tasks</a>
                <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
@endsection
