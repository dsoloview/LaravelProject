<a href="{{route('experience.show', ['experience' => $experience])}}"
   class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
    <img src="{{Illuminate\Support\Facades\Storage::url($experience->image->first()->path)}}" alt="twbs" width="32"
         height="32" class="rounded-circle flex-shrink-0">
    <div class="d-flex gap-2 w-100 justify-content-between">
        <div>
            <h6 class="mb-0">{{$experience->title}}</h6>
            <p class="mb-0 opacity-75">{{$experience->description}}</p>
        </div>
        <small class="opacity-50 text-nowrap">{{$experience->updated_at}}</small>
    </div>
</a>
