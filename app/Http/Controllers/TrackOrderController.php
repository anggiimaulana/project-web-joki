<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrackOrderController extends Controller
{
    public function index()
    {
        $slug = 'track-order';
        $title = 'Track Order - JOKIINIT.com';
        return view('pages.track-order', compact('slug', 'title'));
    }
}
