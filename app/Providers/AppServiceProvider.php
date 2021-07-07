<?php

namespace App\Providers;

use NunoMaduro\Collision\Contracts\Provider;


use Illuminate\Support\Facades\Schema;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // i added below line
        Schema::defaultStringLength(191);
    }
}
