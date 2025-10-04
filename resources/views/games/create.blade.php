<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRIAR</title>
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
</head>
<body>
    <h1 class="title">CADASTRAR JOGO</h1>

    <form action="{{ route('games.store') }}" method="post" class="forms-create-edit">
        @csrf
        <label for="name" class="labels">Nome: </label>
        <input type="text" name="name" class="input-create-edit">

        <label for="genre" class="labels">Gênero: </label>
        <input type="text" name="genre" class="input-create-edit">
        
        <input type="submit" value="Cadastrar" class="button-register-save">
    </form>
</body>
</html>