<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\URL;

use App\Models\Champion\Champion;
use App\Models\NavbarTab;

class LayoutServiceProvider extends ServiceProvider
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
        // Pass champion data to all views
        if (Schema::hasTable('champions')) 
        {
            $champions = Champion::all()->sortBy('name');
            View::share('champions', $champions);
        }
    }
}
