<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SyaratKetentuanController extends Controller
{
    public function index() {
        $slug = 'syarat-ketentuan';
        $title = 'Syarat & Ketentuan Jasa Joki - JOKIINIT.com';
        return view('pages.syarat-ketentuan', compact('slug', 'title'));
    }
}
