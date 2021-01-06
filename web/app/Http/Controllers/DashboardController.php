<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;

class DashboardController extends Controller
{
    public function __invoke() {
        $categories = Category::all();

        $categories->each(function($category) {
            $category->load(['packages' => function($query) {
                $query->with('post')->orderBy('id', 'desc')->limit(6);
            }]);
        });
        $posts = Post::orderBy('id', 'desc')->limit(3)->get();

        return view('client.pages.dashboard', compact('categories', 'posts'));
    }
}
