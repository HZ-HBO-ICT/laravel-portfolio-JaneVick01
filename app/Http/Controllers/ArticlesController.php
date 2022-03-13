<?php

namespace App\Http\Controllers;

class ArticlesController
{
public function show($articleId) {
    return view('article', [
        'article' => Article::find($articleId)
    ]);
}
}
