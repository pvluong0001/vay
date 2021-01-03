<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Type;
use App\Observers\PostObserver;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        Post::observe(PostObserver::class);
        View::composer('client.layout', function($view) {
            $view->with('types', Type::all());
            $view->with('cats', Category::all());
        });
    }
}
