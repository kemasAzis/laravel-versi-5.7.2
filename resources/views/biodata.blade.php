<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorila laravel #4</title>
</head>
<body>
    <h1>Tutorial Laravel #4 : Passing Data Controller Ke View Laravel</h1>
    <p>nama : {{ $nama }}</p>
    <p>nim : {{ $Nim }}</p>
    
    <p>mata kuliah : </p>
    <ul>
        @foreach($mata_kuliah as $mk)
            <li>{{ $mk }}</li>
        @endforeach
    </ul>
</body>
</html>