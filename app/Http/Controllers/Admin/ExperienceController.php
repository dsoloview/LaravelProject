<?php

namespace App\Http\Controllers\Admin;

use App\Contracts\ExperienceRepositoryContract;
use App\Contracts\ImagesRepositoryContract;
use App\Contracts\ProjectsRepositoryContract;
use App\Http\Controllers\Controller;
use App\Http\Requests\ExperienceRequest;
use App\Http\Requests\ProjectsRequest;
use App\Models\Experience;
use App\Models\Project;

class ExperienceController extends Controller
{
    private ExperienceRepositoryContract $experienceRepository;
    private ImagesRepositoryContract $imagesRepository;
    private string $imagePath;

    public function __construct(ExperienceRepositoryContract $experienceRepository, ImagesRepositoryContract $imagesRepository)
    {
        $this->experienceRepository = $experienceRepository;
        $this->imagesRepository = $imagesRepository;
        $this->imagePath = 'images/experience';
    }

    public function index()
    {
        $experience = $this->experienceRepository->index();
        return view('admin.experience.index', compact('experience'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('admin.experience.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(ExperienceRequest $request)
    {
        $fields = $request->validated();

        $project = $this->experienceRepository->create($fields);

        $this->imagesRepository->create($request, $project, $this->imagePath);

        return redirect(route('experience.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Experience $experience)
    {
        return view('admin.experience.show', compact('experience'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Experience $experience)
    {
        return view('admin.experience.edit', compact('experience'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(ExperienceRequest $request, Experience $experience)
    {
        $fields = $request->validated();

        if (!empty($request->image)) {
            $this->imagesRepository->create($request, $experience, $this->imagePath);
        }

        $this->experienceRepository->update($experience, $fields);

        return redirect(route('experience.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function destroy(Experience $experience)
    {
        $this->experienceRepository->delete($experience);

        return redirect(route('experience.index'));
    }
}
