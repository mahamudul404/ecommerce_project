<?php

namespace App\Providers;

// use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

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

    

    public function boot()
    {
        // Use Bootstrap for pagination styling
        Paginator::useBootstrap();
    }

}
