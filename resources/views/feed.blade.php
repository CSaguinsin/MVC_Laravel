<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
    @extends('layouts.master')

    @section('content')
    <div class="flex justify-center">
                @foreach ( $comments as $comment )
                    <h1>{{ $comment['comment'] }}</h1>
                @endforeach
    </div>

    <div class="flex justify-center">
        @foreach ($rates as $rate)
        <h1>{{ $rate['rate'] }}</h1>
        @endforeach
    </div>
    @endsection
</body>
</html>