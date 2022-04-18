<?php

namespace App\Repository;

use App\Models\Image;
use Illuminate\Database\Eloquent\Model;

class ImagesRepository implements \App\Contracts\ImagesRepositoryContract
{
    protected Image $model;

    public function __construct(Image $model)
    {
        $this->model = $model;
    }

    public function create($request, $model, $path)
    {
        Image::create([
            'path' => $request->image->store($path, ['disk' => 'public']),
            'imagable_id' => $model->id,
            'imagable_type' => $model::class,
        ]);
    }

    public function update($request, $model, $path)
    {
        Image::where('imagable_id', $model->id)->where('imagable_type', $model::class)->update([
            'path' => $request->image->store($path, ['disk' => 'public']),
            'imagable_id' => $model->id,
            'imagable_type' => $model::class,
        ]);
    }
}
