@extends('layouts.admin')

@section('adminContent')
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Создание проекта</h1>
    </div>
    <form action="{{route('projects.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <x-forms.input name="title" :errors="$errors" type="text" title="Название"/>
        <x-forms.input name="description" :errors="$errors" type="text" title="Описание"/>
        <x-forms.input name="link" :errors="$errors" type="text" title="Ссылка"/>
        <x-forms.input name="image" :errors="$errors" type="file" title="Изображение"/>
        <x-forms.input name="tag" :errors="$errors" type="text" title="Тэг"/>

        <x-forms.submitButton/>
    </form>
@endsection

