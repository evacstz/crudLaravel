<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>JOGOS</h1>

    <ul>
        @foreach($games as $game)
            <li>{{$game->name}}</li>
        @endforeach
    </ul>
</body>
</html>