<!-- DEFINIÇÃO: menu de navegação no topo do site, existem 2 diferentes (utilizador com login, utilizador sem login) -->

<!-- verificar se o utilizador está logado -->
@if (Auth::check())

<!-- menu com login -->
<nav class="navigation">
    <div class="navigation__left-wrapper">
        <a href="/" data-toggle="tooltip" data-placement="bottom" title="Início"><i class="navigation__icon fas fa-home"></i></a>
    </div>

    <div class="navigation__center-wrapper">
        <a href="/"><img src="{{ URL::asset('assets/images/logo.png') }}" class="navigation__logo"></a>
    </div>

    <div class="navigation__right-wrapper">
        <span data-toggle="tooltip" data-placement="bottom" title="Novo Post">
            <a href="" data-toggle="modal" data-target="#newPost"><i class="navigation__icon fas fa-plus"></i></a>
        </span>

        <a href="/profile/TROCAR" data-toggle="tooltip" data-placement="bottom" title="TROCAR"><i class="navigation__icon fas fa-user"></i></a>

        <div class="navigation__dropdown">
            <button class="button-dropdown"><i class="navigation__icon fas fa-ellipsis-v"></i></button>

            <div class="navigation__dropdown__content-wrapper">
                <a class="navigation__dropdown__link" href="" data-toggle="modal" data-target="#about"><i class="navigation__dropdown__icon fas fa-info"></i>Sobre</a>
                <a class="navigation__dropdown__link" href="/account"><i class="navigation__dropdown__icon fas fa-user-edit"></i>Editar Utilizador</a>
                <a class="navigation__dropdown__link" href="/auth/logout"><i class="navigation__dropdown__icon fas fa-door-open "></i>Terminar Sessão</a>
            </div>
        </div>
    </div>
</nav>

@else

<!-- menu sem login -->
<nav class="navigation">
    <div class="navigation__left-wrapper">
        <a href="/" data-toggle="tooltip" data-placement="bottom" title="Início"><i class="navigation__icon fas fa-home"></i></a>
    </div>

    <div class="navigation__center-wrapper">
        <a href="/"><img src="{{ URL::asset('assets/images/logo.png') }}" class="navigation__logo"></a>
    </div>

    <div class="navigation__right-wrapper">
        <a href="/auth" data-toggle="tooltip" data-placement="bottom" title="Login / Signup"><i class="navigation__icon fas fa-user-plus"></i></a>

        <div class="navigation__dropdown">
            <button class="button-dropdown"><i class="navigation__icon fas fa-ellipsis-v"></i></button>
            <div class="navigation__dropdown__content-wrapper">
                <a class="navigation__dropdown__link" href="" data-toggle="modal" data-target="#about"><i class="navigation__dropdown__icon fas fa-info"></i>Sobre</a></span>
            </div>
        </div>
    </div>
</nav>

@endif