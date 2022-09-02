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
        <div class='beverages'>
            @foreach ($beverages as $beverage)
                <div class='beverage'>
                    <h2 class='title'>
                        <a href="/beverages/{{ $beverage->id }}">{{ $beverage->name }}</a>
                    </h2>
                    <img class='bottle_img' src="{{ asset("images/".$beverage->image_path) }}" alt="">
                    <p>{{ $beverage->image_path }}</p>
                    <p class='cost'>参考価格 ${{ $beverage->cost }}</p>
                    <p class='about'>{{ $beverage->about }}</p>
                    <a href="">{{ $beverage->feature->region}}</a>
                    <a href="">{{ $beverage->feature}}</a>
                </div>
            @endforeach
        </div>
        <div class='pagenate'>
            {{ $beverages->links() }}
        </div>
    </body>
</html>
@endsection