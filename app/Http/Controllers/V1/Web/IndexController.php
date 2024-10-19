<?php

namespace App\Http\Controllers\V1\Web;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class IndexController
{

    public function index()
    {
        $user = Auth::user();
        $posts = Post::where('archived', 0)->with('user')->get();

        return view('index', compact('posts', 'user'));
    }
}
