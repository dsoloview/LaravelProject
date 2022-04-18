@extends('layouts.admin')

@section('adminContent')
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Опыт работы</h1>
        <div>
            <a href="{{route('experience.edit', ['experience' => $experience])}}" class="btn btn-secondary">Изменить
                опыт работы</a>
            <a href="{{route('experience.destroy', ['experience' => $experience])}}" class="btn btn-dark"
               onclick="event.preventDefault(); document.getElementById('destroy-form').submit();">Удалить опыт
                работы</a>
        </div>
        <form id="destroy-form" action="{{ route('experience.destroy', ['experience' => $experience]) }}" method="POST"
              class="d-none">
            @csrf
            @method('delete')
        </form>

    </div>

    <div class="experience_item d-flex mx-auto mb-3 shadow-sm p-3">
        <div class="rounded m-lg-3">
            <a href="{{$experience->link}}" target="_blank"><img class="rounded-circle"
                                                                 src="{{Illuminate\Support\Facades\Storage::url($experience->image->first()->path)}}"
                                                                 alt=""
                                                                 style="width: 50px; height: 50px"></a>
        </div>
        <div class="content">
            <div class="fs-4">{{$experience->title}}</div>
            <div class="fs-5"><a href="{{$experience->link}}" class="text-decoration-none text-reset"
                                 target="_blank">{{$experience->company}}</a>
            </div>
            <div class="mb-2">{{Carbon\Carbon::parse($experience->start_date)->locale('ru')->isoFormat('MMMM YYYY')}}
                - {{Carbon\Carbon::parse($experience->end_date)->locale('ru')->isoFormat('MMMM YYYY')}}
                , {{$experience->city}}</div>
            <div>{{$experience->description}}
            </div>
        </div>
    </div>

@endsection
