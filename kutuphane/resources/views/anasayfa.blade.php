<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
        body {font-family: "Lato", sans-serif;}

        .sidebar {
            height: 100%;
            width: 160px;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #111;
            overflow-x: hidden;
            padding-top: 16px;
        }

        .sidebar a {
            padding: 6px 8px 6px 16px;
            text-decoration: none;
            font-size: 20px;
            color: #818181;
            display: block;
        }

        .sidebar a:hover {
            color: #f1f1f1;
        }

        .main {
            margin-left: 160px; /* Same as the width of the sidenav */
            padding: 0px 10px;
        }

        @media screen and (max-height: 450px) {
            .sidebar {padding-top: 15px;}
            .sidebar a {font-size: 18px;}
        }
    </style>
</head>
<body>

<div class="container">
    <div class="sidebar">
        <a href="{{ route('anasayfa') }}"><i class="fa fa-fw fa-home"></i> Anasayfa</a>  
        <a href="{{ route('kategorilerindex') }}"><i class="fa fa-fw fa-sort-alpha-asc"></i> Kategoriler</a>
        <a href="{{ route('kitaplarindex') }}"><i class="fa fa-fw fa-book"></i> Kitaplar</a>
        <a href="{{ route('uyelerindex') }}"><i class="fa fa-fw fa-user"></i> Uyeler</a>
        <a href="{{ route('emanetlerindex') }}"><i class="fa fa-fw fa-inbox"></i> Emanet</a>
        <a href="{{ route('iletisim') }}"><i class="fa fa-fw fa-envelope"></i> Iletisim</a>
        <a href="{{ route('cikis') }}"><i class="fa fa-fw fa-times-circle"></i> Cikis</a>
    </div>

    <div class="main">
        @yield('content')
    </div>
    