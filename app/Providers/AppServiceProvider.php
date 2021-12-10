<?php

namespace App\Providers;

use App\Views\Composers\GenreComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
//        View::share('genres', Genre::orderBy('name')->get());

        View::composer('components.genres.*', GenreComposer::class);
    }
}
