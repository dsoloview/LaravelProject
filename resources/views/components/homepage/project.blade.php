@props(['project'])
<div class="col-sm-4 sm-margin-b-50">
    <div class="margin-b-20">
        <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
            <a href="{{$project->link}}" target="_blank"><img class="img-responsive" src="{{Illuminate\Support\Facades\Storage::url($project->image_path)}}" alt="Latest Products Image"></a>
        </div>
    </div>
    <h4><a href="{{$project->link}}" target="_blank">{{$project->title}}</a> <span class="text-uppercase margin-l-20">{{$project->tag}}</span></h4>
    <p>{{$project->description}}</p>
    <a class="link" href="{{$project->link}}" target="_blank">Перейти на сайт</a>
</div>
