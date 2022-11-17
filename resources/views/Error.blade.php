<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Error</title>
</head>
<body>
<h1>Error {{$code}}</h1>
@if($code == 0) <h2>Проверьте данные и попробуйте ещё раз:</h2>
@else($code == -1)<h2>Убедитесь, что загружаете картинку и попробуйте ещё раз:</h2>
@endif
<a href="/home">Вернуться</a>
</body>
</html>
