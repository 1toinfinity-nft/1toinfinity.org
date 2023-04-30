<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ isset($title) ? "${title} - 1ToInfinity" : '1ToInfinity' }}</title>
    @stack('stylesheets')
</head>

<body>

    @if($errors->any())
    <div>
        @foreach ($errors->all() as $error)
        {{ $error }} <br />
        @endforeach
    </div>
    @endif

    @auth
    <form action="{{ route('logout') }}" method="post">
        @csrf
        <button type="submit">
            Logout
        </button>
    </form>
    @endauth

    @yield('content')

    @stack('scripts')

</body>

</html>