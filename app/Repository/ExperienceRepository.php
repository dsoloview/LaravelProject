<?php

namespace App\Repository;

use App\Models\Experience;

class ExperienceRepository extends BaseRepository implements \App\Contracts\ExperienceRepositoryContract
{
    protected Experience $model;

    public function __construct(Experience $model)
    {
        $this->model = $model;
    }
}
