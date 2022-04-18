@extends('layouts.admin')

@section('adminContent')
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Изменение проекта</h1>
    </div>
    <form action="{{route('projects.update', ['project' => $project])}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <x-forms.input name="title" :errors="$errors" type="text" title="Название" :model="$project"/>
        <x-forms.input name="description" :errors="$errors" type="text" title="Описание" :model="$project"/>
        <x-forms.input name="link" :errors="$errors" type="text" title="Ссылка" :model="$project"/>
        <x-forms.input name="image" :errors="$errors" type="file" title="Изображение" :model="$project"/>
        <x-forms.input name="tag" :errors="$errors" type="text" title="Тэг" :model="$project"/>
        <x-forms.submitButton/>
    </form>
@endsection

