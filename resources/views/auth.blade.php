<!-- DEFINIÇÃO: página de login ou signup do site -->

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- TÍTULO DA PÁGINA -->
    <title>Login ou Signup</title>

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
    <link rel="stylesheet" href="{{ URL::asset('css/auth.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/nav.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/footer.css') }}">

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
    <main class="content">
        <div class="content__logo-wrapper">
            <a href="{{ route('home') }}">
                <img src="{{ URL::asset('images/full-logo.png') }}" class="content__logo">
            </a>
        </div>

        <div class="content__links-wrapper">
            <a class="content__link" data-auth="login">Log In</a>
            <a class="content__link" data-auth="signup">Sign Up</a>
        </div>

        <!-- mostrar erros -->
        <div class="errors alert alert-danger">
            <ul class="errors__list"></ul>
        </div>

        <!-- formulário de login -->
        <div class="content__form-wrapper" id="content__login">
            <form id="loginForm" method="post" action="{{ route('auth.login') }}">
                @csrf

                <input class="content__text" type="text" name="name_or_email" placeholder="Nome de Utilizador ou Email" require>
                <input class="content__password" type="password" name="password" placeholder="Palavra-passe" require>

                <div class="row">
                    <div class="col-12 my-auto">
                        <button class="button button-primary">Entrar</button>
                    </div>
                </div>
            </form>
        </div>

        <!-- formulário de signup -->
        <div class="content__form-wrapper" id="content__signup">
            <form id="signupForm" method="post" action="{{ route('auth.signup') }}">
                @csrf

                <input class="content__text" type="text" name="name" placeholder="Nome de Utilizador" require>
                <input class="content__email" type="email" name="email" placeholder="Email" require>
                <input class="content__password" type="password" name="password" placeholder="Palavra-passe" require>
                <input class="content__password" type="password" name="password_confirmation" placeholder="Confirmar Palavra-passe" require>

                <a class="content__link" data-toggle="tooltip" data-placement="bottom" title="Os restantes dados poderá preencher na área de utilizador!"><i class="fas fa-info-circle content__icon"></i></a>
                <button class="button button-primary">Registar</button>
            </form>
        </div>
    </main>
</body>

</html>
