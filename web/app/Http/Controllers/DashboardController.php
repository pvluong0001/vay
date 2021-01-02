<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\Post;

class DashboardController extends Controller
{
    public function __invoke() {
        $packages = Package::with('post')->orderBy('id', 'desc')->limit(6)->get();
        $posts = Post::orderBy('id', 'desc')->limit(3)->get();

        return view('client.pages.dashboard', compact('packages', 'posts'));
    }
}
