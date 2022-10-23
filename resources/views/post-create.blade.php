@extends('components.layout')
@section('head')
    <title>Авторизация</title>
    <link rel="stylesheet" href="/auth.css">
@endsection
@section('header')
    <header class="header">
        <img class="header__img" src="/icons/logo.svg" />
        <nav class="header__menu">
            <button class="button">Личный кабинет</button>
            <button class="button">Выход</button>
        </nav>
    </header>
@endsection
@section('content')

    <body>
        <div class="reg-form">
            <form class="form" action="">
                <h1 class="form__subtitle">Создание заявки</h1>
                <fieldset class="form__fieldset">
                    <label for="fullname">Фотография</label>
                    <input id="fullname" name="fullname" placeholder="Введите ваше ФИО" class="input" />
                </fieldset>
                <fieldset class="form__fieldset">
                    <label for="password">Название</label>
                    <input id="password" name="password" placeholder="Введите ваш пароль" class="input" />
                </fieldset>
                <fieldset class="form__fieldset">
                    <label for="fullname">Категория</label>
                    <select name="fullname" id="fullname">
                        <option value="1">1</option>
                        <option value="1">1</option>
                        <option value="1">1</option>
                        <option value="1">1</option>
                    </select>
                </fieldset>
                <fieldset class="form__fieldset">
                    <label for="password">Описание</label>
                    <input id="password" name="password" placeholder="Введите ваш пароль" class="input" />
                </fieldset>
                <button value="Личный кабинет" class="button">СОЗДАТЬ</button>
            </form>
        </div>
    </body>
@endsection
