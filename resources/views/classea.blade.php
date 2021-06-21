<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Classe A</h1>
    <ul>
      @foreach ($lista as $list)
        @if ($list['Classe'] === 'A')
        <li>nome: {{$list['nome']}}, cognome: {{$list['cognome']}}, Classe: {{$list['Classe']}} </li>
        @endif
          
      @endforeach

    </ul>

    <a href="http://localhost:8000">Home</a>
</body>
</html>