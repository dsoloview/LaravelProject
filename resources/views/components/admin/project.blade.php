<a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
    <img src="{{Illuminate\Support\Facades\Storage::url($project->image_path)}}" alt="twbs" width="32" height="32" class="rounded-circle flex-shrink-0">
    <div class="d-flex gap-2 w-100 justify-content-between">
        <div>
            <h6 class="mb-0">{{$project->title}}</h6>
            <p class="mb-0 opacity-75">{{$project->description}}</p>
        </div>
        <small class="opacity-50 text-nowrap">{{$project->updated_at}}</small>
    </div>
</a>
