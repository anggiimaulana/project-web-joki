<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $slug = 'home';
        $title = 'Jasa Joki Tugas IT - JOKIINIT.com';
        $blog = Blog::with(['kategoriBlog', 'user'])
            ->select('title', 'slug', 'image', 'content', 'created_at', 'posisi_kerja', 'kategori_blog_id', 'user_id')
            ->orderBy('created_at', 'desc')
            ->limit(3)
            ->where('status', 'publish')
            ->get();

        // Return ke view parent yang menggunakan @include blog_home
        return view('pages.home', compact('title', 'blog', 'slug'));
    }
}
