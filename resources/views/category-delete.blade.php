@extends('components.layout')
@section('head')
    <title>Авторизация</title>
    <link rel="stylesheet" href="/auth.css">
@endsection
@section('header')
    <header class="header">
        <img class="header__img" src="/icons/logo.svg" />
        <nav class="header__menu">
            <button value="Личный кабинет" class="button">На главную</button>
        </nav>
    </header>
@endsection
@section('content')

    <body>
        <div class="reg-form">
            <form class="form" action="">
                <h1 class="form__title">Удаление категории</h1>
                <fieldset class="form__fieldset">
                    <label for="fullname">Категория</label>
                    <select name="fullname" id="fullname">
                        <option value="1">1</option>
                        <option value="1">1</option>
                        <option value="1">1</option>
                        <option value="1">1</option>
                    </select>
                </fieldset>
                <button class="button">УДАЛИТЬ</button>
            </form>
        </div>
    </body>
@endsection
