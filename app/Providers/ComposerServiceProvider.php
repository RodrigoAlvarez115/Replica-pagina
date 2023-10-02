<?php

namespace App\Providers;

use App\Models\Publication;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer(['index','show', 'notices', 'guides', 'reviews', 'searchs'], function ($view) {
            $asides = Publication::inRandomOrder()->limit(3)->get();
            $view->with('asides', $asides);
        });
    }
}
