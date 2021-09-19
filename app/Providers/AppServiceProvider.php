<?php

namespace App\Providers;

use App\brand;
use App\category;
use View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('front-end.master', function ($view){
            $categories = category::where('category_status', 1)->get();
            $brands = brand::where('brand_status', 1)->get();

            $view->with('categories', $categories );
            $view->with('brands', $brands );
        });
        view()->composer('front-end.brand.brand_product', function ($view){
            $categories = category::where('category_status', 1)->get();
            $brands = brand::where('brand_status', 1)->get();

            $view->with('categories', $categories );
            $view->with('brands', $brands );
        });
        view()->composer('front-end.category.category_product', function ($view){
            $categories = category::where('category_status', 1)->get();
            $brands = brand::where('brand_status', 1)->get();

            $view->with('categories', $categories );
            $view->with('brands', $brands );
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
