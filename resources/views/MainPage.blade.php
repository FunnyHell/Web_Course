<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home page</title>
    <link rel="stylesheet" href="{{asset('storage').'/css/styles.css'}}">
</head>
<body>
@extends('layouts.app')
@section('content')

    <div>
        @foreach($posts as $post)
            <a href="{{url('prod', $post->id)}}">
                <div class="product">
                    <img src="{{asset('storage'). $post->image}}">
                    <div class="product-text row">
                        <div class="col"><h2 style="text-align: left">{{$post->title}}</h2>
                        </div>
                        <div class="col"><h2 style="text-align: right">{{$post->cost}} $</h2>
                        </div>
                    </div>
                </div>
            </a>
        @endforeach
        <div class="navbar-pag">
            {{$posts->onEachSide(5)->links()}}
        </div>

    </div>
@endsection
</body>
</html>
