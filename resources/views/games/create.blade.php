<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRIAR</title>
</head>
<body>
    <h1>CADASTRAR JOGO</h1>

    <form action="{{ route('games.store') }}" method="post">
        @csrf
        <label for="name">Nome: </label>
        <input type="text" name="name">

        <label for="genre">Gênero: </label>
        <input type="text" name="genre">
        
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>