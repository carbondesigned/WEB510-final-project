@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="my-4">Tasks</h1>
                <p>Number of pending tasks: {{ $pendingTasksCount }}</p>
                <a href="{{ route('tasks.create') }}" class="btn btn-primary mb-3">Create Task</a>

                <table class="table">
                    <thead>
                    <tr>
                        <th>Title</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($tasks as $task)
                        <tr>
                            <td><a href="{{ route('tasks.show', $task->id) }}">{{ $task->title }}</a></td>
                            <td>{{ $task->status }}</td>
                            <td>
                                <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
