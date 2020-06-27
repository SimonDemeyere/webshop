<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider
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
        $this->getCart();
    }

    private function getCart()
    {
        view()->composer('layouts.partials_front.header', 'App\Http\Controllers\ProductController@getCart');
    }
}
