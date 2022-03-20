@extends('layouts.app')


@section('content')
    <div class="px-4 py-5 my-5 text-center">
        <h1 class="display-5 fw-bold">dsoloview Laravel Project</h1>
        <div class="col-lg-6 mx-auto">
          <p class="lead mb-4">Добрый день! Это мой небольшой проект на PHP + Laravel. Сейчас из-за работы не так много времени на ведение своего GitHub, но этот небольшой сайт - начало этого пути. Возможно, что-то будет даже для вас полезно!</p>
          <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
            <a type="button" href="{{route('tasks.index')}}" class="btn btn-primary btn-lg px-4 gap-3">To Do</a>
            <a type="button" href="#" class="btn btn-outline-secondary btn-lg px-4">Здесь будет что-то интересное</a>
          </div>
        </div>
      </div>
@endsection
