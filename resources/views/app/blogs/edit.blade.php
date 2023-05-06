@extends('app.layouts.default')

@section('content')
<div>
    <h1>
        {{ $blog->title }}
    </h1>
    <div>
        {{ $blog->excerpt }}
    </div>
    <form action="{{ route('app.blogs.update', [$blog]) }}" method="post">
        @csrf
        @method('patch')
        <select name="published" id="published">
            <option value="1">Yes</option>
            <option value="0" @selected(!$blog->isPublished())>No</option>
        </select>
        <button type="submit">Update</button>
    </form>
</div>
@endsection