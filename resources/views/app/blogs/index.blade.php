@extends('app.layouts.default')

@section('content')
<div>
    @forelse($blogs as $blog)
    <ul>
        <li>
            {{ $blog->title }}
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