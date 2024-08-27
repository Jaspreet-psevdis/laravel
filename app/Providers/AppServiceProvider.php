<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use OpenAdmin\Admin\Admin;

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
        Admin::style('.bg-semi-dark {background:#6c757d;}');
        Admin::style(':root {--menu-active-bg: none;}');
        Admin::style(':root {--menu-darker-bg: none;}');
        // Admin::style(':root {--menu-text: none;}');
        
    }
}
