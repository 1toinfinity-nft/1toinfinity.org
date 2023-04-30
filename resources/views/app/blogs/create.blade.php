@extends('app.layouts.default')

@section('content')
<div>
    <form action="{{ route('app.blogs.store') }}" method="post">
        @csrf
        <input type="text" name="title" id="title" placeholder="title" />
        <textarea name="content" id="content" placeholder="Content"></textarea>
        <button type="submit">Create</button>
    </form>
</div>
@endsection