<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$post[0]->title}}</title>
    <link rel="stylesheet" href="{{asset('storage').'/css/styles.css'}}">
</head>
<body>
<h1>Hello, world</h1><br>
<div>
    @for($i = 0; $i < count($post); $i++)
        <div class="product">
            <img src="{{asset('storage'). $post[$i]->image}}">
            <div class="product-text">
                <h2 style="text-align: left">{{$post[$i]->title}}</h2>
                <h2 style="text-align: right">{{$post[$i]->cost}}</h2>
            </div>
        </div>
    @endfor
</div>
</body>
</html>
