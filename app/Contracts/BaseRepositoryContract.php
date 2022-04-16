<?php

namespace App\Contracts;

use App\Models\Project;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

interface BaseRepositoryContract
{
    public function index(): Collection;

    public function create(array $fields): Model;

    public function update(Model $model, array $fields): bool;

    public function delete(Model $model): bool;
}
