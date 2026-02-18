<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Visi veicamie uzdevumi</h1>
<ul>
    @foreach ($todos as $todo)
    <li>{{ $todo->content }}</li>
    @endforeach
</ul>
</body>
</html>