<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Presto.it</title>
</head>
<body>
    <div>
        <h1>Un nostro cliente chiede di lavorare con noi</h1>
        <h3>Ecco i suoi dati:</h3>
        <h5>Nome: {{ $user->name }}</h5>
        <h5>Email: {{ $user->email }}</h5>
        <h5>Se vuoi confermare la sua richiesta, clicca qui sotto:</h5>
        <a href="{{route('make.revisor', compact('user'))}}">Accetta Revisor</a>
    </div>
</body>
</html>