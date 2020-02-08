<?php

namespace App\Providers;

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
        /*
        * Como tengo una versión anticuada de laravel (5.5), debo utilizar el esquema
        * https aquí. Lo cual fuerza a mis vistas a usar este esquema
        */
        \Illuminate\Support\Facades\URL::forceScheme('https');
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
