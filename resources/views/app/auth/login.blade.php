<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div>
        @if($errors->any())

        @foreach ($errors->all() as $error)
        {{ $error }} <br />
        @endforeach
        
        @endif
    </div>

    <form action="{{ route('login') }}" method="post">
        @csrf
        <input type="text" name="email" id="email" placeholder="email" />
        <input type="password" name="password" id="password" placeholder="password" />
        <button type="submit">Login</button>
    </form>

</body>

</html>