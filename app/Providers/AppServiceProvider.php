<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
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

        Schema::defaultStringLength(191);

        $loader = \Illuminate\Foundation\AliasLoader::getInstance();
        $loader->alias('Service', 'App\Helpers\SettingsHelper');
        $loader->alias('FrontEnd', 'App\Helpers\FrontEndHelper');
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
