<?php

namespace App\Http\Controllers\Admin;

use App\Contracts\ProjectsRepositoryContract;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectsRequest;
use App\Models\Project;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Print_;

class ProjectsController extends Controller
{

    private ProjectsRepositoryContract $projectsRepository;

    public function __construct(ProjectsRepositoryContract $projectsRepository)
    {
        $this->projectsRepository = $projectsRepository;
    }

    public function index()
    {
        $projects = $this->projectsRepository->index();
        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('admin.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(ProjectsRequest $request)
    {
        $fields = $request->validated();
        $fields['image_path'] = $request->image->store('images/projects', ['disk' => 'public']);

        $this->projectsRepository->create($fields);

        return redirect(route('projects.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Project $project)
    {
        return view('admin.projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(ProjectsRequest $request, Project $project)
    {
        $fields = $request->validated();
        if (!empty($request->image)) {
            $fields['image_path'] = $request->image->store('images/projects', ['disk' => 'public']);
        }

        $this->projectsRepository->update($project, $fields);

        return redirect(route('projects.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function destroy(Project $project)
    {
        $this->projectsRepository->delete($project);

        return redirect(route('projects.index'));
    }
}
