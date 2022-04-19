@extends('layouts.admin')

@section('adminContent')
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Изменение опыта работы</h1>
    </div>
    <form action="{{route('experience.update', ['experience' => $experience])}}" method="post"
          enctype="multipart/form-data">
        @csrf
        @method('patch')
        <x-forms.input name="company" :errors="$errors" type="text" title="Компания" :model="$experience"/>
        <x-forms.input name="title" :errors="$errors" type="text" title="Должность" :model="$experience"/>
        <x-forms.input name="start_date" :errors="$errors" type="date" title="Начало работы" :model="$experience"/>
        <x-forms.input name="end_date" :errors="$errors" type="date" title="Окончание работы" :model="$experience"/>
        <x-forms.input name="description" :errors="$errors" type="text" title="Описание" :model="$experience"/>
        <x-forms.input name="city" :errors="$errors" type="text" title="Город" :model="$experience"/>
        <x-forms.input name="link" :errors="$errors" type="text" title="Ссылка" :model="$experience"/>
        <x-forms.input name="image" :errors="$errors" type="file" title="Изображение" :model="$experience"/>

        <x-forms.submitButton/>
    </form>
@endsection

