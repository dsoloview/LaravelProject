<?php

namespace App\Http\Controllers;

use App\Contracts\ExperienceRepositoryContract;
use App\Contracts\ProjectsRepositoryContract;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class MainController extends Controller
{

    private ProjectsRepositoryContract $projectsRepository;
    private ExperienceRepositoryContract $experienceRepository;

    public function __construct(ProjectsRepositoryContract $projectsRepository, ExperienceRepositoryContract $experienceRepository)
    {
        $this->projectsRepository = $projectsRepository;
        $this->experienceRepository = $experienceRepository;
    }

    public function homepage()
    {
        $experience = Cache::remember('homeExperience', 86400, function () {
            return $this->experienceRepository->index();
        });
        $projects = Cache::remember('homeProjects', 86400, function () {
            return $this->projectsRepository->index();
        });
        return view('pages.homepage', compact('projects', 'experience'));
    }
}
