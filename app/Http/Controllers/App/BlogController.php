<?php

namespace App\Http\Controllers\App;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function index()
    {
        return view('app.blogs.index', [
            'title' => 'Blogs',
            'blogs' => Blog::latest()->paginate(25),
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

        DB::transaction(fn () => Blog::create($data));

        return to_route('app.blogs.index')->with('message', 'Blog created successfully.');
    }

    public function edit(Blog $blog)
    {
        return view('app.blogs.edit', [
            'title' => 'Edit Blog',
            'blog' => $blog,
        ]);
    }

    public function update(Request $request, Blog $blog)
    {
        $data = $request->validate([
            'published' => ['required', 'boolean'],
        ]);

        if (!(bool)$data['published']) {
            DB::transaction(fn () => $blog->update([
                'published_at' => null,
            ]));
        } elseif (!$blog->isPublished()) {
            DB::transaction(fn () => $blog->update([
                'published_at' => now(),
            ]));
        }

        return redirect()->back()->with('message', 'Blog updated successfully.');
    }

    public function destroy(Blog $blog)
    {
        $blog->delete();

        return to_route('app.blogs.index')->with('message', 'Blog deleted successfully.');
    }
}
