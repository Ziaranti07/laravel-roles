<?php

namespace App\Providers;


use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

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
        Paginator::useBootstrapFive();
        view()->composer('*', function ($view) {
            if (Auth::check()) {
                View::share([
                    'userGlobal' => User::find(Auth::user()->id),
                    'judul' => 'E-Office',
                    'footer' => 'E-Office Production 2024'
                ]);
            } else {
                $view->with('userGlobal', null);
            }
        });
    }
}
