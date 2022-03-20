@extends('layouts.app')

@section('content')
    <div class="px-4">
        <h1 class="display-5 fw-bold">To Do лист</h1>
        <div class="col-lg-6">
          <p class=" mb-4">Небольшой To Do лист. Пока здесь только добавление/выполнение/удаление задач, но скоро будет больше возможностей</p>
        </div>
      </div>
        <div class="list-group">
          @foreach ($tasks as $task)
                  <x-tasks.task :task="$task" />
          @endforeach
          </div>
          <x-tasks.create/>
@endsection
