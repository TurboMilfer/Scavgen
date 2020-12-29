<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Scavgen</title>
    <link href="./css/app.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    @if (App::environment('production'))
    <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(70878700, "init", {
                clickmap:true,
                trackLinks:true,
                accurateTrackBounce:true
        });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/70878700" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    @endif
    </head>
    <body class="bg-light">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand h1 blended" href="#">Scavgen</a>
            
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link blended-reg" href="{{ route('single') }}">Собрать дикого</a>
                    <a class="nav-item nav-link blended-reg" href="{{ route('team') }}">Собрать отряд</a>
                </div>
            </div>
        </nav>
    </div>
    <div class="container border border-dark rounded">
        <div class="jumbotron">
            <h1 class="display-4 text-center blended">Генератор имен диких!</h1>
            <hr class="my-4">
            <h2 class="text-center blended-reg-bg">{{ $names['fullName'] }}</h2>
            <br>
            @if ($isLegendary)
            <h2 class="text-center text-success .blended-reg-bg">Легендарная находка!</h2>
            <br>
            @endif
            <p class="lead">
                <a class="btn btn-success btn-lg d-flex justify-content-center blended-reg" href="{{ route('single') }}" role="button">Сгенерировать</a>
            </p>
        </div>
    </div>
    </body>
</html>