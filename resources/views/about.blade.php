<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel | About</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Ini Halaman About</h1>
    <h3>Halaman ini berisi data Admin</h3>
    <p>Nama : {{ $name }} <br> 
    Email : {{ $email }}</p>
    <img src="img/{{ $image }}" alt="{{ $name }}" height="200px" >
</body>
</html>