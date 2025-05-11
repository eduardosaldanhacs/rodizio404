<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;
use Illuminate\Support\Facades\Route;
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
        Livewire::setUpdateRoute(function ($handle) {
            return Route::post('/sabor_gauderio/livewire/update', $handle);
        });
    }
}
