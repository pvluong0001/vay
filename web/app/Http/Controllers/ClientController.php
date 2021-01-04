<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Package;
use App\Models\Post;
use App\Models\Type;

class ClientController extends Controller
{
    public function postDetail($slug, Post $post) {
        if(!$post->id) {
            return abort(404);
        }

        return view('client.pages.post', compact('post'));
    }

    public function type(Type $type) {
        $posts = Post::whereHas('types', function($query) use ($type) {
            $query->where('types.id', '=', $type->id);
        })->orderBy('id', 'desc')->get();

        return view('client.pages.type', compact('posts'));
    }

    public function posts() {
        $posts = Post::orderBy('id', 'desc')->paginate(1);

        return view('client.pages.posts', compact('posts'));
    }

    public function category(Category $category) {
        $packages = Package::whereHas('categories', function($query) use ($category) {
            $query->where('categories.id', '=', $category->id);
        })->orderBy('id', 'desc')->get();

        return view('client.pages.category', compact('packages', 'category'));
    }
}
