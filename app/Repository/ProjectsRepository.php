<?php

namespace App\Repository;

use App\Models\Project;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\Print_;

class ProjectsRepository extends BaseRepository implements \App\Contracts\ProjectsRepositoryContract
{
    protected $model;

    public function __construct(Project $model)
    {
        $this->model = $model;
    }
}
