@extends('components.layout')
@section('head')
    <title>Авторизация</title>
    <link rel="stylesheet" href="/auth.css">
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
        <div class="reg-form">
            <form class="form" action="">
                <h1 class="form__title">Регистрация</h1>
                <fieldset class="form__fieldset">
                    <label for="fullname">ФИО</label>
                    <input id="fullname" name="fullname" placeholder="Введите ваше ФИО" class="input" />
                </fieldset>
                <fieldset class="form__fieldset">
                    <label for="login">Логин</label>
                    <input id="login" name="login" placeholder="Введите ваш логин" class="input" />
                </fieldset>
                <fieldset class="form__fieldset">
                    <label for="email">Email</label>
                    <input id="email" name="email" placeholder="Введите ваш email" class="input" />
                </fieldset>
                <fieldset class="form__fieldset">
                    <label for="password">Пароль</label>
                    <input id="password" name="password" placeholder="Введите ваш пароль" class="input" />
                </fieldset>
                <fieldset class="form__fieldset">
                    <label for="password_repeat">Повтор пароля</label>
                    <input id="password_repeat" name="password_repeat" placeholder="Введите ваш пароль еще раз"
                        class="input" />
                </fieldset>
                <button class="button">РЕГИСТРАЦИЯ</button>
            </form>
        </div>
    </body>
@endsection
