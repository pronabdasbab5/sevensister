<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class IndexblogcomposerServiceProvider extends ServiceProvider
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
            'blog_details',
            'App\Http\ViewComposers\Indexcomposer@indexblogcomposer'
        );
    }
}
