<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8" />
        <title>{{$post-> title}}</title>
        <link rel="stylesheet" href="/css/style.css" />
    </head>
    <body>
        <h1>
            {{$post-> title}}
        </h1>
        <div>{!! nl2br(e($post-> body)) !!}</div>
    </body>

    <script src="/js/main.js"></script>
</html>
