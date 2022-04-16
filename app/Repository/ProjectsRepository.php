<?php

namespace App\Repository;

use App\Models\Project;

class ProjectsRepository extends BaseRepository implements \App\Contracts\ProjectsRepositoryContract
{
    protected Project $model;

    public function __construct(Project $model)
    {
        $this->model = $model;
    }
}
