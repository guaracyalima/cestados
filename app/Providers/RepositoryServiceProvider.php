<?php

namespace CEstados\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'CEstados\Repositories\StatesRepository',
            'CEstados\Repositories\StatesRepositoryEloquent'
        );

        $this->app->bind(
            'CEstados\Repositories\UserRepository',
            'CEstados\Repositories\UserRepositoryEloquent'
        );
    }
}
