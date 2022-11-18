<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\View\Components\Button;
class CustomServiceProvider extends ServiceProvider
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
        Blade::component('custom-btn', Button::class);
    }
}
