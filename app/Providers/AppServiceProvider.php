<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Schema;


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
        Paginator::useBootstrap();
        Schema::defaultStringLength(191);

        view()->composer('layouts.sidebar', function($view) {
            $view->with('posts', Post::orderBy('views','desc')->limit(3)->get())
            ->with('category', Category::withCount('posts')->orderBy('title')->get())
            ->with('tags', Tag::all());
        });
    }
}
