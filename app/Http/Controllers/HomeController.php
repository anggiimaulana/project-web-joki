<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $slug = 'home';
        $title = 'Jasa Joki Tugas IT - JOKIINIT.com';
        return view('pages.home', compact('slug', 'title'));
    }

}
