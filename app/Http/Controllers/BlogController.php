<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $slug = 'blog';
        $title = 'Blog - JOKIINIT.com';
        $blog = Blog::with(['kategoriBlog', 'user'])
            ->select('title', 'slug', 'image', 'content', 'created_at', 'posisi_kerja', 'kategori_blog_id', 'user_id')
            ->orderBy('created_at', 'desc')
            ->paginate(6);

        return view('pages.blog', compact('slug', 'blog', 'title'));
    }

    public function detail($slug)
    {
        $blog = Blog::with(['kategoriBlog', 'user'])
            ->where('slug', $slug)
            ->firstOrFail();

        $slug = 'blog';
        $title = $blog->title . ' - JOKIINIT.com';

        // Related blogs: same category, exclude current, ambil 3
        $relatedBlogs = Blog::with(['kategoriBlog', 'user'])
            ->where('kategori_blog_id', $blog->kategori_blog_id)
            ->where('id', '!=', $blog->id)
            ->orderBy('created_at', 'desc')
            ->limit(3)
            ->get();

        return view('pages.detail-blog', compact('blog', 'slug', 'title', 'relatedBlogs'));
    }
}
