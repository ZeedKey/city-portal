@extends('components.layout')
@section('head')
    <title>Авторизация</title>
    <link rel="stylesheet" href="/profile.css">
@endsection
@section('header')
    <header class="header">
        <img class="header__img" src="/icons/logo.svg" />
        <nav class="header__menu">
            <button class="button">На главную</button>
        </nav>
    </header>
@endsection
@section('content')

    <body>
        <div class="accout">
            <h1 class="account__welcome">Добро пожаловать в личный кабинет, Вадим Дорошенко</h1>
            <div class="account__info">
                <h2>Имя: Вадим Дорошенко</h2>
                <h2>Логин: stayut</h2>
                <h2>Email: stayut@gmail.com</h2>
                <h2>Роль: пользователь</h2>
            </div>
            <div class="account__filter">
                <h1 class="account__title">Мои заявки</h1>
                <div>
                    <label for="filter">Фильтр:</label>
                    <select name="filter" id="filter">
                        <option value="1" selected>1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </div>
            </div>
            <div class="account__posts">
                <x-post />
                <x-post />
                <x-post />
                <x-post />
            </div>
        </div>
    </body>
@endsection
