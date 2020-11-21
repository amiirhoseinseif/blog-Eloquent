<?php

namespace App\Providers;

use \App\Models\Posts;
use \App\Models\Categories;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class UserProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
//        View::share ('post', Posts::all('id','title')->get ()->toArray());
//        View::share ('category', Categories::all ('id','name')->get ()->toArray());
        View::composer(['*'], function($post)
        {
            $post->with('post', Posts::all('id','title'));
        });
        View::composer (['*'], function ($category)
        {
            $category->with('category', Categories::all ('id','name'));
        });
    }


    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
