<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MOSTRAR</title>
</head>
<body>
    <h1>JOGOS</h1>

    <ul>
        @foreach($games as $game)
            <li>{{$game->name}} | <a href="{{ route('games.edit', $game->id) }}">Editar</a></li>
        @endforeach
    </ul>

    <a href="{{ route('games.create') }}">CADASTRAR NOVO JOGO</a>

</body>
</html>