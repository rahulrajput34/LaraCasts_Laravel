<?php

namespace App\Providers;

use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Model;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // We gonna remove the lazy loading of the relationships by adding the below line
        Model::preventLazyLoading();

        // If we want the bootstrap for ui of pagination
        // Paginator::useBootstrapFive();
    }
}
