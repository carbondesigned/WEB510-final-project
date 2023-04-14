<?php

namespace App\Providers;

use App\Http\ViewComposers\TaskComposer;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        // Sharing data with all views
        View::composer('*', TaskComposer::class);

        // Or, sharing data with specific views
        // View::composer(['tasks.index', 'tasks.show'], TaskComposer::class);
    }
}
