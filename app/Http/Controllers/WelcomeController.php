<?php
namespace App\Http\Controllers;

use App\Models\Article;

class WelcomeController
{
    public function show() {
        return view( 'Welcome', ['articles' => Article::all(),]);
    }
}
