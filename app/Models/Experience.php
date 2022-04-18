<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Experience extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function image(): \Illuminate\Database\Eloquent\Relations\MorphMany
    {
        return $this->morphMany(Image::class, 'imagable');
    }
}
