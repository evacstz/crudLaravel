<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JOGOS</title>
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
</head>
<body>
    <h1 class="title">JOGOS</h1>

    <ul id="list">
        @foreach($games as $game)
            <li id="item">{{ $game->name }} ✮ {{ $game->genre }} | <a href="{{ route('games.edit', $game->id) }}">Editar</a> |
                <form action="{{ route('games.destroy', $game->id) }}" method="post" id="form-button-delete">
                    @method("delete")
                    @csrf
                    <input type="submit" value="Excluir" id="button-delete">
                </form>
            </li>
        @endforeach
    </ul>

    <a href="{{ route('games.create') }}" id="button-create">CADASTRAR NOVO JOGO</a>
</body>
</html>