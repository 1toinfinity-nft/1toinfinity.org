@extends('app.layouts.default')

@section('content')
<div>
    <form action="{{ route('login') }}" method="post">
        @csrf
        <input type="text" name="email" id="email" placeholder="email" />
        <input type="password" name="password" id="password" placeholder="password" />
        <button type="submit">Login</button>
    </form>
</div>
@endsection