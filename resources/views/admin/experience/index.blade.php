@extends('layouts.admin')

@section('adminContent')
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Опыт работы</h1>
        <a href="{{route('experience.create')}}" class="btn btn-dark">Добавить опыт работы</a>
    </div>
    <div class="list-group">
        @foreach($experience as $item)
            <x-admin.experience :experience="$item"/>
        @endforeach
    </div>
@endsection
