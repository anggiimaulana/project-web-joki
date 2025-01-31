<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index() {
        $slug = 'service';
        $title = 'Layanan Joki - JOKIINIT.com';
        return view('pages.service', compact('slug', 'title'));
    }
}
