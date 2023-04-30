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
    <header>
        <nav>
            <ul>
                <li><a href="{{ route('app.dashboard') }}">Dashboard</a></li>
                <li><a href="{{ route('app.blogs.index') }}">Blogs</a></li>
                <li><a href="{{ route('app.blogs.create') }}">Blog Create</a></li>
                <li>
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button type="submit">
                            Logout
                        </button>
                    </form>
                </li>
            </ul>
        </nav>
    </header>
    @endauth

    @yield('content')

    @if(session('message'))
    <script>
        alert("{{ session('message') }}");
    </script>
    @endif
    @stack('scripts')

</body>

</html>