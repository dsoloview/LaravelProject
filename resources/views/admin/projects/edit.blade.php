@extends('layouts.admin')

@section('adminContent')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Изменение проекта</h1>
    </div>
    <form action="{{route('projects.update', ['project' => $project])}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <div class="mb-3">
            <label for="title" class="form-label">Название</label>
            <input type="text" class="form-control" name="title" value="{{old('title', $project->title)}}">
            @if ($errors->has('title'))
                <div class="text-danger">{{ $errors->first('title')}}</div>
            @endif
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Описание</label>
            <input type="text" class="form-control" name="description" value="{{old('description', $project->description)}}">
            @if ($errors->has('description'))
                <div class="text-danger">{{ $errors->first('description')}}</div>
            @endif
        </div>
        <div class="mb-3">
            <label for="link" class="form-label">Ссылка</label>
            <input type="text" class="form-control" name="link" value="{{old('link', $project->link)}}">
            @if ($errors->has('link'))
                <div class="text-danger">{{ $errors->first('link')}}</div>
            @endif
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Изображение</label>
            <input type="file" class="form-control" name="image">
            @if ($errors->has('image'))
                <div class="text-danger">{{ $errors->first('image')}}</div>
            @endif
        </div>
        <div class="mb-3">
            <label for="link" class="form-label">Тэг</label>
            <input type="text" class="form-control" name="tag" value="{{old('tag', $project->tag)}}">
            @if ($errors->has('tag'))
                <div class="text-danger">{{ $errors->first('tag')}}</div>
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Изменить</button>
    </form>
@endsection

