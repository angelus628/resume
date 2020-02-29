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
        /**
        * Como tengo una versión anticuada de laravel (5.5), debo utilizar el esquema
        * https aquí. Lo cual fuerza a mis vistas a usar este esquema
        *
        * FIX: adicionalmente en local no tengo cómo usar certificados, por lo
        * que debo realizar una validación para no utilizar https sólo si estoy
        * en producción
         */
        $squeme = (app()->isLocal())? 'http' : 'https';
        \Illuminate\Support\Facades\URL::forceScheme($squeme);
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
