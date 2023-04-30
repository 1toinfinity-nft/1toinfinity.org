<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('app.blogs.index', [
            'title' => 'Blogs',
            'blogs' => Blog::latest()->paginate(5),
        ]);
    }

    public function create()
    {
        return view('app.blogs.create', [
            'title' => 'Create Blog',
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => ['min:3', 'max:250', 'string'],
            'content' => ['min:3', 'max:30000', 'string'],
        ]);

        Blog::create($data);

        return to_route('app.blogs.index')->with('message', 'Blog created successfully.');
    }

    public function destroy(Blog $blog)
    {
        $blog->delete();

        return to_route('app.blogs.index')->with('message', 'Blog deleted successfully.');
    }
}
