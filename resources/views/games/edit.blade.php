<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDITAR</title>
</head>
<body>
    <h1>EDITAR JOGO</h1>

    <form action="{{ route('games.update', $game->id) }}" method="post">
        @method("put")
        @csrf
        <label for="name">Nome: </label>
        <input type="text" name="name" value="{{ $game->name }}">

        <label for="genre">Gênero: </label>
        <input type="text" name="genre" value="{{ $game->genre }}">
        
        <input type="submit" value="Salvar">
    </form>
</body>
</html>