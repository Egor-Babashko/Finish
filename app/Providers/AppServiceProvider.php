<?php

namespace App\Providers;

use Illuminate\Pagination\PaginationServiceProvider;
use Illuminate\Support\ServiceProvider;
use Nette\Utils\Paginator;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        \Illuminate\Pagination\Paginator::useBootstrapFive();
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
