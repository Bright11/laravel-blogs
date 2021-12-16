<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\category;
class NavigationServiceProvider extends ServiceProvider
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
        //
        view()->composer('*', function ($view){
            $cat = category::all();

            return $view->with('cat',$cat);
        });
    }
}
