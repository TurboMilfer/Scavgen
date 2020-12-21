<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <nav class="navbar navbar-light bg-light">
        <span class="navbar-brand mb-0 h1"></span>
    </nav>
    </head>
    <body>
    <div class="container border border-dark rounded">
        <div class="jumbotron">
            <h1 class="display-4 text-center">Генератор имен диких!</h1>
            <hr class="my-4">
            <p class="lead text-center">{{ $names['fullName'] }}</p>
            <p class="lead">
                <a class="btn btn-success btn-lg d-flex justify-content-center" href="/" role="button">Сгенерировать</a>
            </p>
        </div>
    </div>
    </body>
</html>
