@extends('app.layouts.default')

@section('content')
<div>
    @forelse($blogs as $blog)
    <ul>
        <li>
            {{ $blog->title }} <a href="{{ route('app.blogs.edit', [$blog]) }}">[Edit]</a>
            <form action="{{ route('app.blogs.destroy', [$blog]) }}" method="post">
                @csrf
                @method('delete')
                <button type="submit">DELETE</button>
            </form>
        </li>
    </ul>
    @empty
    No Blogs Found!
    @endforelse

    {{ $blogs->links() }}
</div>
@endsection