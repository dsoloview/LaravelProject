@extends('layouts.admin')

@section('adminContent')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Проекты</h1>
        <a href="{{route('projects.create')}}" class="btn btn-dark">Создать проект</a>
    </div>
    <div class="list-group">
    @foreach($projects as $project)
        <x-admin.project :project="$project"/>
    @endforeach
    </div>
@endsection
