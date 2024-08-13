<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset("css/app.css") }}">

    <title>{{ $title }}</title>
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
<body>
    <div class="container">
        <h1>{{ $title }}</h1>
        {{ $slot }}
    </div>
</body>
</html>
