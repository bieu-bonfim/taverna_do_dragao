<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/main.css" type="text/css">
    <link rel="stylesheet" href="/css/reset.css" type="text/css">

    <title>Taverna do Dragão</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=MedievalSharp&display=swap');
    </style>
    <style>
        body {
            font-family: 'MedievalSharp', cursive;
            font-weight: 400;
            font-style: normal;
        }
    </style>
</head>
<body class="body">
    <header class="container-header">
        <div class="div-links-header"> 
                <a href="/">Home</a>
                <a href="/cardapio">Cardápio</a>
                <a href="/reservas">Reservas</a>
                <a class="div-link-header-shopping-cart" href="/carrinho-de-compras">Carrinho de compras</a>
        </div>
        <a class="div-link-shopping-cart" href="/carrinho-de-compras">Carrinho de compras</a>
        <img class="img-header" src="/img/header.png" alt="Header do Taverna do Dragão">
   </header>
    <div class="container-div">

        <!-- <h1>{{ $title }}</h1> -->
        {{ $slot }}
    </div>
    <footer>
       <h1>© Taverna do Dragão</h1>
    </footer>
</body>
</html>
