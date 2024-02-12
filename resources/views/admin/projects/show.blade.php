@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <div class="card text-center">
            <div class="card-header">
                <h3>{{ $project->title }}</h3>
            </div>
            <div class="card-body">
                <p class="card-text"> {{ $project->description }}</p>
                @if ($project->project_image)
                    <div class="my-4">
                        <img src="{{ asset('storage/' . $project->project_image) }}" class="w-50">
                    </div>
                @endif
                <div class="my-3">
                    <strong>Type:</strong> {{ $project->type?->title }}
                </div>
                <a href="{{ route('admin.projects.index') }}" class="btn btn-primary">Go back to projects list</a>
            </div>
        </div>

    </div>
@endsection
