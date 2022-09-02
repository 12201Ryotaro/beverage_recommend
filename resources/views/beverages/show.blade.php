@extends('layouts.app')

@section('content')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Bevs</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <style>
        .name{
        font-size: 1.5em;
        }
        </style>
    </head>
    <body>
        <div class='beverage'>
            <h2 class='name'>{{ $beverage->name }}</h2>
            <img class='bottle_img' src="{{ asset("images/".$beverage->image_path) }}" alt="">
            <p>{{ $beverage->image_path }}</p>
            <p class='cost'>参考価格 ${{ $beverage->cost }}</p>
            <p class='about'>{{ $beverage->about }}</p>
            <a href="">{{ $beverage->feature->region}}</a>
            <a href="">{{ $beverage->feature}}</a>
           </div>
    </body>
</html>
@endsection