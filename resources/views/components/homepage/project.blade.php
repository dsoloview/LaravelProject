@props(['project'])
<div class="col">
    <div class="shadow-sm card h-100">
        <a href="{{$project->link}}" target="_blank"><img class="project_image thumbnail d-block mx-lg-auto img-fluid"
                                                          src="{{Illuminate\Support\Facades\Storage::url($project->image->first()->path)}}"
                                                          alt="Latest Products Image" style="margin: 0 auto"></a>
        <div class="card-body d-flex flex-column justify-content-end">
            <h4><a href="{{$project->link}}" class="text-decoration-none text-body"
                   target="_blank">{{$project->title}}</a></h4>
            <p class="card-text text-secondary">{{$project->description}}</p>
        </div>
        <div class="card-footer d-flex justify-content-between align-items-center">
            <div class="btn-group">
                <a href="{{$project->link}}" class="btn btn-sm btn-outline-secondary">Перейти на сайт</a>
            </div>
            <div class="text-muted">{{$project->tag}}</div>
        </div>
    </div>
</div>
