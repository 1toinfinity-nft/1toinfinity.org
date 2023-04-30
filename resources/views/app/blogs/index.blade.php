@extends('app.layouts.default')

@section('content')
<div>
    @forelse($blogs as $blog)
    <ul>
        <li>{{ $blog->title }}</li>
    </ul>
    @empty
    No Blogs Found!
    @endforelse
</div>
@endsection