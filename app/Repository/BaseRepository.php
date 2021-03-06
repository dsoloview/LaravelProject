<?php

namespace App\Repository;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

abstract class BaseRepository implements \App\Contracts\BaseRepositoryContract
{
    public function index(): Collection
    {
        return $this->model->all();
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
