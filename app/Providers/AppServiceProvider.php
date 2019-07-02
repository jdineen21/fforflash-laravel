<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;

use Illuminate\Support\ServiceProvider;

use App\Models\Champion\Champion;

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
        // Pass champion data to all views
        if (Schema::hasTable('champions')) 
        {
            $champions = Champion::all()->sortBy('name');
            view()->share('champions', $champions);
        }
    }
}
