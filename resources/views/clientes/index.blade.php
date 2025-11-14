<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
</head>
<body>
    Clientes
    @foreach ($clientes as $cliente)
        <div>{{ $cliente->nome }}</div>
    $endforeach
</body>
</html>