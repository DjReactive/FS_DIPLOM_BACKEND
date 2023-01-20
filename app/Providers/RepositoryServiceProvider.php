<?php

namespace App\Providers;

use App\Repositories\HallRepository;
use App\Repositories\Interfaces\HallRepositoryInterface;
use App\Repositories\Interfaces\MoviesRepositoryInterface;
use App\Repositories\Interfaces\SettingsRepositoryInterface;
use App\Repositories\Interfaces\ShowTimeRepositoryInterface;
use App\Repositories\Interfaces\TicketsRepositoryInterface;
use App\Repositories\Interfaces\UserRepositoryInterface;
use App\Repositories\MoviesRepository;
use App\Repositories\SettingsRepository;
use App\Repositories\ShowTimeRepository;
use App\Repositories\TicketsRepository;
use App\Repositories\UserRepository;
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
        $this->app->bind(
            HallRepositoryInterface::class,
            HallRepository::class
        );
        $this->app->bind(
            MoviesRepositoryInterface::class,
            MoviesRepository::class
        );
        $this->app->bind(
            SettingsRepositoryInterface::class,
            SettingsRepository::class
        );
        $this->app->bind(
            ShowTimeRepositoryInterface::class,
            ShowTimeRepository::class
        );
        $this->app->bind(
            TicketsRepositoryInterface::class,
            TicketsRepository::class
        );
        $this->app->bind(
            UserRepositoryInterface::class,
            UserRepository::class
        );
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
