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

    <title>Registration page</title>
</head>
<body>
<div class="registration-form">
    <form method="post" action="/registration">
        @csrf
        <input type="text" placeholder="name" name="name" required><br>

        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
            <input type="radio" class="btn-check" name="sex" id="male" autocomplete="off" value="male" checked>
            <label class="btn btn-outline-primary" for="male">Male</label>

            <input type="radio" class="btn-check" name="sex" id="female" autocomplete="off" value="female">
            <label class="btn btn-outline-primary" for="female">Female</label>

            <input type="radio" class="btn-check" name="sex" id="None" autocomplete="off" value="none">
            <label class="btn btn-outline-primary" for="None">None</label>

        </div>
        <br>
        <input type="tel" name="number" placeholder="number" required pattern="[0-9]{10}"><br>
        <input type="password" name="password" placeholder="password" required><br>
        <input type="date" max="2022-01-01" name="date">
        <input type="submit">
        <input type="reset">
    </form>
</div>
</body>
</html>
