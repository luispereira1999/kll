<!-- DEFINIÇÃO: página individual de um post -->

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- TÍTULO DA PÁGINA -->
    <title>{{ $post->title }}</title>

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
    <link rel="stylesheet" href="{{ URL::asset('css/post.css') }}">
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
    <!-- CABEÇALHO: menu de navegação, logótipo -->
    <header>
        @include("nav")
        @include("new-post")
        @include("about")
    </header>


    <!-- PRINCIPAL: post -->
    <main>
        <section class="full-post__header-wrapper">
            <h2 class="full-post__title">{{ $post->title }}</h2>
            <a class="full-post__link" href="{{ route('profile', ['userId' => $post->post_user_id]) }}">
                <h3 class="full-post__name">{{ $post->post_user_name }}</h3>
            </a>
            <h3 class="full-post__date">{{ $post->date }}</h3>
        </section>

        <section data-post="{{ $post->id }}" class="full-post__main-wrapper">
            <div>
                <p class="full-post__description">{{ $post->description }}</p>
            </div>

            <div class="full-post__interactions">
                <div class="full-post__votes">
                    <span class="full-post__vote" data-vote="upvote">
                        <i class="full-post__icon fas fa-heart" @if ($post->vote_user_id == $loggedUserId && $post->vote_type_id == 1)
                            data-markedvote="marked"
                            @endif
                            data-toggle="tooltip" data-placement="bottom" title="Up Vote"></i>
                    </span>

                    <label class="full-post__votes-amount">{{ $post->votes_amount }}</label>

                    <span class="full-post__vote" data-vote="downvote">
                        <i class="full-post__icon fas fa-heart-broken" @if ($post->vote_user_id == $loggedUserId && $post->vote_type_id == 2)
                            data-markedvote="marked"
                            @endif
                            data-toggle="tooltip" data-placement="bottom" title="Down Vote">
                        </i>
                    </span>
                </div>

                <span data-toggle="tooltip" data-placement="bottom" title="Comentários"><i class="fas fa-comment full-post__icon"></i></span>
                <label class="full-post__comments-amount">{{ $post->comments_amount }}</label>
            </div>
        </section>
    </main>


    <!-- COMENTÁRIOS -->
    <section class="comments">
        <span class="comment__new" data-toggle="modal" data-target="#newComment"><i class="fas fa-plus comment__new__icon"></i> Novo Comentário</span>
        @include('new-comment')

        <hr>

        <div class="comments__content-wrapper">
            <ul class="comments__items">
                @if (isset($comments))

                @foreach ($comments as $comment)
                <!-- comentário -->
                @include('comment')

                @endforeach
                @endif
            </ul>
        </div>
    </section>


    <!-- RODAPÉ: copyright, autor -->
    <footer class="footer">
        @include("footer")
    </footer>


    <!-- MODAL DE ERROS -->
    @include('error')
</body>

</html>
