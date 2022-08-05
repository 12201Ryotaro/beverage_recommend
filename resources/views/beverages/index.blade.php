@extends('layouts.app')

@section('content')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Bevs</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Beverage Recommend Site</h1>
        <div class='beverages'>
            @foreach ($beverages as $beverage)
                <div class='beverage'>
                    <h2 class='name'>{{ $beverage->name }}</h2>
                    <p class='cost'>{{ $beverage->cost }}</p>
                    <p class='about'>{{ $beverage->about }}</p>
                </div>
            @endforeach
        </div>
        <div class='pagenate'>
            {{ $beverages->links() }}
        </div>
    </body>
</html>
@endsection