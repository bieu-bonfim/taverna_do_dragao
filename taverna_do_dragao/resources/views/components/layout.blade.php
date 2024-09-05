<!doctype html>
<html lang="pt-br">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="body">
    @if (str_contains(Request::path(), 'dashboard') === false &&
            str_contains(Request::path(), 'login') === false &&
            str_contains(Request::path(), 'cadastrar') === false)
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
    @elseif (Request::path() == 'dashboard')
        <header class="header-dashboard">
        </header>
    @endif
    @isset($message)
        <div class="alert-message alert alert-warning alert-dismissible fade show" role="alert">
            {{ $message }}
            <button type="button" class="close btn" data-bs-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endisset
    @if (@session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    {{-- @if (Session::has('error'))
        <div class="m-0 error alert alert-danger" role="alert">
            {{ session('error') }}
        </div>
    @endif --}}
    @if ($errors->any())
        <div class="m-0 error alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="{{ str_contains(Request::path(), 'dashboard') === false ? 'container-div' : 'container-div-dash' }}">
        {{ $slot }}
    </div>
    @if (Request::path() != 'dashboard' && Request::path() != 'login')
        <footer>
            {{-- <h1>© Taverna do Dragão</h1> --}}
        </footer>
    @endif
</body>

</html>
