<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Cart;
use Illuminate\Support\Facades\Cookie;

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
        view()->composer(
            'layouts.app',
            function ($view) {
                $guest = Cookie::has('guest') ? cookie::get('guest') : cookie::queue('guest', rand() . rand(), 4500);
                $hasCart = Cart::where('guestid', $guest)->count();
                $view->with('hasCart', $hasCart);
            }
        );
    }
}
