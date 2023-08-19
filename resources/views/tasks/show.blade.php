@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Task Details') }}</div>

                    <div class="card-body">
                        <h2>{{ $task->name }}</h2>
                        <p>{{ $task->description }}</p>

                        <a href="{{ route('task.edit', $task->id) }}">Edit Task</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection