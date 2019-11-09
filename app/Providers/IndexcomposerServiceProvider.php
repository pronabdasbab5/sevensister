<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class IndexcomposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer(
            'include.header',
            'App\Http\ViewComposers\Indexcomposer@indexcomposer'
        );

        view()->composer(
            'index',
            'App\Http\ViewComposers\Indexcomposer@indexcomposer'
        );

        view()->composer(
            'house_boat',
            'App\Http\ViewComposers\Indexcomposer@indexcomposer'
        );

        view()->composer(
            'safari.kaziranga_jeep_safari',
            'App\Http\ViewComposers\Indexcomposer@indexcomposer'
        );

        view()->composer(
            'safari.manas_jeep_safari',
            'App\Http\ViewComposers\Indexcomposer@indexcomposer'
        );

        view()->composer(
            'national_park.assam.kaziranga_national_park',
            'App\Http\ViewComposers\Indexcomposer@indexcomposer'
        );
    }
}
