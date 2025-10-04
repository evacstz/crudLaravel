<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDITAR</title>
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
</head>
<body>
    <h1 class="title">EDITAR JOGO</h1>

    <form action="{{ route('games.update', $game->id) }}" method="post" class="forms-create-edit">
        @method("put")
        @csrf
        <label for="name" class="labels">Nome: </label>
        <input type="text" name="name" value="{{ $game->name }}" class="input-create-edit">

        <label for="genre" class="labels">Gênero: </label>
        <input type="text" name="genre" value="{{ $game->genre }}" class="input-create-edit">
        
        <input type="submit" value="Salvar" class="button-register-save">
    </form>
</body>
</html>