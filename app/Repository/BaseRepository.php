<?php

namespace App\Repository;

use App\Models\Project;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class BaseRepository implements \App\Contracts\BaseRepositoryContract
{
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function index(): Collection
    {
        return $this->model->get();
    }

    public function create(array $fields): Model
    {
        return $this->model->create($fields);
    }

    public function update(Model $model, array $fields): bool
    {
        return $model->update($fields);
    }

    public function delete(Model $model): bool
    {
        return $model->delete();
    }
}
