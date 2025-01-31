<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {
        $slug = 'faq';
        $title = 'FAQ - JOKIINIT.com';
        return view('pages.faq', compact('slug', 'title'));
    }
}
