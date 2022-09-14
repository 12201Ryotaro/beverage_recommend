@extends('layouts.app')

@section('content')
    <div>
        <h2>あなたの好み</h2>
        @foreach ($preferences as $preference)
            <p>{{$preference}}</p>
        @endforeach
    </div>
@endsection