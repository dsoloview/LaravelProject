@extends('layouts.admin')

@section('adminContent')
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Проект</h1>
        <div>
            <a href="{{route('projects.edit', ['project' => $project])}}" class="btn btn-secondary">Изменить проект</a>
            <a href="{{route('projects.destroy', ['project' => $project])}}" class="btn btn-dark"
               onclick="event.preventDefault(); document.getElementById('destroy-form').submit();">Удалить проект</a>
        </div>
        <form id="destroy-form" action="{{ route('projects.destroy', ['project' => $project]) }}" method="POST"
              class="d-none">
            @csrf
            @method('delete')
        </form>

    </div>
    <div class="col">
        <div class="h-100">
            <img class="d-block img-fluid w-25"
                 src="{{Illuminate\Support\Facades\Storage::url($project->image->first()->path)}}"
                 alt="Latest Products Image">
            <div class="card-body">
                <h4><a href="{{$project->link}}" class="text-decoration-none text-body"
                       target="_blank">{{$project->title}}</a></h4>
                <p class="card-text text-secondary">{{$project->description}}</p>
            </div>
            <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    <a href="{{$project->link}}" class="btn btn-sm btn-outline-secondary" target="_blank">Перейти на
                        сайт</a>
                </div>
                <div class="d-flex">
                    <div class="text-muted me-2">{{$project->created_at}}</div>
                    <div class="badge bg-secondary">{{$project->tag}}</div>
                </div>
            </div>
        </div>
    </div>

@endsection
