<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        return inertia('Blog/Index', [
            'blogs' => Blog::with('author:id,name')
                ->published()
                ->latest()
                ->paginate(15),
        ]);
    }

    public function show(string $slug)
    {
        abort_if(is_null($blog = Blog::findBySlug($slug)), 404);

        return inertia('Blog/Show', [
            'blog' => $blog,
        ]);
    }
}
