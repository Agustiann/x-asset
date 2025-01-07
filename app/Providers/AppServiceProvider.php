<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Session;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }
    
    public function boot()
    {
        Session::flush(); // Menghapus semua session saat aplikasi dimulai
    }


    /**
     * Bootstrap any application services.
     */
    // public function boot(): void
    // {
    //     Schema::defaultStringLength(191);
    // }
}
