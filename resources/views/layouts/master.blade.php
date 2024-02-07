<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <nav>
        @include('layouts.navbar')
    </nav>

    <div>
        @yield('content')
    </div>

    <footer>
        @include('layouts.layout')
    </footer>
</body>
</html>