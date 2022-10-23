@extends('components.layout')
@section('head')
    <title>Авторизация</title>
    <link rel="stylesheet" href="/auth.css">
@endsection
@section('header')
    <header class="header">
        <img class="header__img" src="/icons/logo.svg" />
        <nav class="header__menu">
            <button value="Личный кабинет" class="button">Личный кабинет</button>
            <button value="Личный кабинет" class="button">Выход</button>
        </nav>
    </header>
@endsection
@section('content')

    <body>
        <div class="reg-form">
            <form class="form" action="">
                <h1 class="form__subtitle">Создание заявки</h1>
                <fieldset class="form__fieldset">
                    <label for="password">Название</label>
                    <input id="password" name="password" placeholder="Введите ваш пароль" class="input" />
                </fieldset>
                <button class="button">СОЗДАТЬ</button>
            </form>
        </div>
    </body>
@endsection
