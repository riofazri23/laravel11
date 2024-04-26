<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Contact</title>
</head>
<body>
    <a href="/">Home</a>
    <a href="/about">About</a>
    <a href="/contact">Contact</a>
    <a href="/blog">Blog</a>
    
    <li>
        <h3>Nama: {{ $nama }}</h3>
    </li>
    <li>
        <h3>Email: {{ $email }}</h3>
    </li>
    <li>
        <h3>No Telp: {{ $notelp }}</h3>
    </li>
    <li>
        <h3>Domisili: {{ $domisili }}</h3>
    </li>
</body>
</html>