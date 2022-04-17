<?php

namespace App\Providers;

use App\Contracts\BaseRepositoryContract;
use App\Contracts\ProjectsRepositoryContract;
use App\Repository\BaseRepository;
use App\Repository\ProjectsRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(BaseRepositoryContract::class, BaseRepository::class);
        $this->app->singleton(ProjectsRepositoryContract::class, ProjectsRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
