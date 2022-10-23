@extends('components.layout')
@section('head')
    <title>Главная страница</title>
    <link rel="stylesheet" href="/home.css">
@endsection
@section('header')
    <header class="header">
        <img class="header__img" src="/icons/logo.svg" />
        <nav class="header__menu">
            <button class="button">Личный кабинет</button>
        </nav>
    </header>
@endsection
@section('content')

    <body>
        <div class="offer">
            <h1 class="offer__title">
                Городской портал города Ижевска
            </h1>
            <h3 class="offer__subtitle">
                Делаем городскую среду лучше уже на протяжении 25 лет
                <button class="button">Оставить заявку</button>
            </h3>
        </div>
        <div class="posts">
            <h1 class="posts__title">
                Недавние заявки
            </h1>
            <div class="posts__list">
                <x-post />
                <x-post />
                <x-post />
                <x-post />
            </div>
        </div>
        <h1 class="posts-resolved">
            Всего решенных заявок - 53
        </h1>
    </body>
@endsection
@section('footer')
    <footer class="footer">
        <h1>Volokh-Doroshenko 2022</h1>
    </footer>
@endsection
