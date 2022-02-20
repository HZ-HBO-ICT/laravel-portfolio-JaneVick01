<?php

namespace App\Http\Controllers;

class Faq
{
    public function show() {
        return view( 'faq', [
            'faq' => Faq::all()
        ]);
    }
}
