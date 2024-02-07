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
        <div class="pt-10 flex justify-center space-x-10">
                    @foreach ($users as $user)
                        <h1>{{ $user['name'] }}</h1>
                    @endforeach
        </div>
        <div class="pt-5 flex justify-center space-x-10">
                            @foreach ($secondName as $name)
                                <h1>{{ $name['first'] }}</h1>
                                <h1>{{ $name['age'] }}</h1>
                            @endforeach
        </div>
   @endsection
</body>
</html>
