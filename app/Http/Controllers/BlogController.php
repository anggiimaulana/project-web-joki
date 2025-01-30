<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $slug = 'blog';
        $title = 'Blog JOKIINIT.com';
        return view('pages.blog', compact('slug', 'title'));
    }
}
