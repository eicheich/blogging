<?php

namespace App\Http\Controllers\V1\Web;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PostController 
{

    public function store(Request $request) {
        $auth = Auth::user();

        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'nullable|image',
            'category_id' => 'nullable',
            'is_private' => 'nullable',
            'allow_interaction' => 'nullable'
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image->storeAs('public/posts', $image->hashName());
            $imagePath = 'storage/posts/' . $image->hashName();
        }

        $isPrivate = $request->has('is_private') ? 1 : 0;
        $allowInteraction = $request->has('allow_interaction') ? 1 : 0;

        DB::beginTransaction();

        try {
            $post = Post::create([
                'title' => $request->title,
                'content' => $request->content,
                'thumbnail' => $imagePath ?? null,
                'category_id' => $request->category_id,
                'archived' => $isPrivate,
                'allow_interaction' => $allowInteraction,
                'user_id' => $auth->id
            ]);

            DB::commit();
            return redirect()->route('index')->with('success', 'Your post was sent');
        } catch (\Exception $e) {
            print($e->getMessage());
            DB::rollBack();
            return redirect()->route('index')->with('error', 'Failed to send post' , $e->getMessage());
        }
    }
    //
}
