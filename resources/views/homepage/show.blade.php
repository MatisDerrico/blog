<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Mon blog</h1>

    <h1>{{$article ->title}}</h1>

    <dl>
        <dt>Body:</dt>
        <dd>{{$article->body}}</dd>
        <dt>Date publication:</dt>
        <dd>{{$article->published_at->diffForHumans()}}</dd>
    </dl>
</body>
</html>
