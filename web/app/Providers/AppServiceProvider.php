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
        View::composer('client.pages.category', function($view) {
            $data = $view->getData();
            $category = $data['category'];

            $posts = Post::whereHas('types', function($query) use ($category) {
                $query->where('types.id', '=', $category->id);
            })->limit(8)->get();

            $view->with('posts', $posts);
            $view->with('type', Type::findOrFail($category->id));
        });
        View::composer('client.layout', function($view) {
            $view->with('types', Type::all());
            $view->with('cats', Category::all());
        });
    }
}
