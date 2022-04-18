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
