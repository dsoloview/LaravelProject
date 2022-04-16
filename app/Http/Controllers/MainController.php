<?php

namespace App\Http\Controllers;

use App\Contracts\ProjectsRepositoryContract;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class MainController extends Controller
{

    private ProjectsRepositoryContract $projectsRepository;

    public function __construct(ProjectsRepositoryContract $projectsRepository)
    {
        $this->projectsRepository = $projectsRepository;
    }

    public function homepage()
    {
        $projects = Cache::remember('homeProjects', 86400, function () {
            return $this->projectsRepository->index();
        });
        return view('pages.homepage', compact('projects'));
    }
}
