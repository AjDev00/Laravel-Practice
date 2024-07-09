<?php

namespace App\Providers;

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
    public function boot(): void
    {
        // View::share([
        //     'country' => 'Nigeria',
        //     'state' => 'Lagos',
        //     'city' => 'Ikeja'
        // ]);

        View::composer(['admin/home','customer/sub/about','customer/home'], function($view){
            $view -> with('country', 'Nigeria');
            $view -> with('state','Lagos');
            $view -> with('city','Ikeja');
        });
    }
}
