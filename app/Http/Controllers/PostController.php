<?php
namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function show($slug)
    {
        //$post = \DB::table('posts')-where('slug', $slug)-first();
        $post = Post::where('slug', $slug)->firstorFail();
        if (! $post) {
            abort(404);
        }

        return view ('post', [
            'post' => $post
        ]);
    }
}