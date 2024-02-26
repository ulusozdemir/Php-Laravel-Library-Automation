@extends('anasayfa')

@section('title', 'İletisim')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <h2>İletişime Geç</h2>
    <hr>
    <br>
    <div style="display: flex; margin-top: 15px; margin-bottom: 15px;">
        <label style="font-weight: bold;" for="eposta">E-Posta: </label>
        <p style="margin: 0; padding-left: 10px;">info@gmail.com</p>
    </div>
    <div style="display: flex; margin-top: 15px; margin-bottom: 15px;">
        <label style="font-weight: bold;" for="telefon">Telefon: </label>
        <p style="margin: 0; padding-left: 10px;">+90 505 1111</p>
    </div>
    <div style="display: flex; margin-top: 15px; margin-bottom: 15px;">
        <label style="font-weight: bold;" for="adres">Adres: </label>
        <p style="margin: 0; padding-left: 10px;">Keas 69 Str.
            15234, Chalandri
            Athens,
            Greece</p>
    </div>
</body>
</html>
@endsection