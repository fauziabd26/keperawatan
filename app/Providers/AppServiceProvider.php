<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
<<<<<<< HEAD
=======
use Illuminate\Support\Facades\Schema;
>>>>>>> 385c8795de4045e5e1eb3a01288031821e770273

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
<<<<<<< HEAD
        //
=======
        Schema::defaultStringLength(191);
>>>>>>> 385c8795de4045e5e1eb3a01288031821e770273
    }
}
