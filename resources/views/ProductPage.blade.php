<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('storage').'/css/styles.css'}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>{{$prod->title}}</title>
    <a href="/registration">butt</a>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col">
            <h1>{{$prod->title}}</h1>
            <br>
            <p>{{$prod->description}}</p>
        </div>
        <div class="col">
            <img src="{{asset('storage'). $prod->image}}">
            <h2 style="text-align: center">{{$prod->cost}} $</h2>
        </div>
    </div>
</div>
</body>
</html>
