<!-- DEFINIÇÃO: página 500 error -->

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- TÍTULO DA PÁGINA -->
    <title>Erro Fatal</title>

    <!-- METADADOS -->
    <meta charset="utf-8">
    <meta name="description" content="Uma rede social alternativa! Escreva os seus melhores posts.">
    <meta name="keywords" content="Rede, Social, Web, App">
    <meta name="author" content="Francisca Costa, Lara Ribeiro, Luís Pereira">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('images/favicon.ico') }}">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/global.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/error.css') }}">

    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <!-- JS -->
    <script type="text/javascript" src="{{ URL::asset('js/main.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/function.js') }}"></script>

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
    <script src="https://kit.fontawesome.com/ed5c768cb2.js" crossorigin="anonymous"></script>

    <!-- FONT FAMILY -->
    <link href="https://fonts.googleapis.com/css2?family=Nova+Round&family=Nunito:wght@300;400&display=swap" rel="stylesheet">
</head>

<body>
    <!-- CONTEÚDO -->
    <section class="content">
        <div class="content__logo-wrapper">
            <a href="{{ route('home') }}">
                <img src="{{ asset('images/full-logo.png') }}" class="content__logo">
            </a>
        </div>

        <main>
            <h1 class="content__title">ERROR 500</h1>
            <h3 class="content__subtitle">Erro fatal erro.</h3>
            <p class="content__paragraph">Oh! Parece que algo deu errado.</p>
        </main>
    </section>
</body>

</html>
