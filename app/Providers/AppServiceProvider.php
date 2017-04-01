<?php

namespace App\Providers;
use View;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::share('datetime',date('M-D-Y'));


        //
 }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
