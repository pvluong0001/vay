<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function postDetail($slug, Post $post) {
        if(!$post->id) {
            return abort(404);
        }

        return view('client.pages.post', compact('post'));
    }
}
