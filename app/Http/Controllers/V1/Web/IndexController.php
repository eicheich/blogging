<?php

namespace App\Http\Controllers\V1\Web;

use App\Models\Post;
use Illuminate\Http\Request;

class IndexController
{

    public function index()
    {
        $posts = Post::where('archived', 0)->with('user')->get();

        return view('index', compact('posts'));
    }
}
