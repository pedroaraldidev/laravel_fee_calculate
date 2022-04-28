<?php

namespace App\Providers;

use App\Repositories\Contracts\{
   FeeRepositoryInterface, PlanRepositoryInterface, CodeRepositoryInterface
};
use App\Repositories\{
   FeeRepository, PlanRepository, CodeRepository

};
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            FeeRepositoryInterface::class,
            FeeRepository::class,

        );
        $this->app->bind(
            PlanRepositoryInterface::class,
            PlanRepository::class
        );
        $this->app->bind(
            CodeRepositoryInterface::class,
            CodeRepository::class
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

    }
}
