<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="/admin/libraries/bootstrap-grid/bootstrap-grid.min.css">
    <link rel="stylesheet" href="/admin/libraries/normalize/normalize.css">
    <link rel="stylesheet" href="/admin/css/global.css">
    <script src="/admin/libraries/jquery/jquery.min.js"></script>

</head>

<body>
<div class="wrapper">
    <header class="header">
        <div class="container-fluid">
            <aside class="header__aside aside">
                <button class="aside__open-btn">
                    <span></span>
                </button>
                <nav class="nav">
                    <button class="aside__close-btn"></button>
                    <a href="/" class="logo">
                        <img src="/admin/images/logo.jpg" alt="Logo">
                    </a>
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="{{route('navbar.index')}}" class="nav__link nav__link--hoverable <?= $pageactive === '17' ? 'nav__link--active' : ''?>">Навигация уровень 1</a>
                        </li>
                        <li class="nav__item">
                            <a href="{{route('nav.index')}}" class="nav__link nav__link--hoverable <?= $pageactive === '18' ? 'nav__link--active' : ''?>">Навигация уровень 2</a>
                        </li>
                        <li class="nav__item">
                            <a href="{{route('main.index')}}" class="nav__link nav__link--hoverable <?= $pageactive === '1' ? 'nav__link--active' : ''?>">Главные баннеры</a>
                        </li>
                        <li class="nav__item">
                            <a href="{{route('director.index')}}" class="nav__link nav__link--hoverable <?= $pageactive === '19' ? 'nav__link--active' : ''?>">Обращение директора</a>
                        </li>
                        <li class="nav__item">
                            <a href="{{route('layout.index')}}" class="nav__link nav__link--hoverable <?= $pageactive === '3' ? 'nav__link--active' : ''?>">Планировки</a>
                        </li>
                        <li class="nav__item">
                            <a href="{{route('komplecs.index')}}" class="nav__link nav__link--hoverable <?= $pageactive === '2' ? 'nav__link--active' : ''?>">Жилые комплексы</a>
                        </li>
                        <li class="nav__item">
                            <a href="{{route('addres.index')}}" class="nav__link nav__link--hoverable <?= $pageactive === '4' ? 'nav__link--active' : ''?>">Адреса отделов продаж</a>
                        </li>
                        <li class="nav__item">
                            <a href="{{route('meneger.index')}}" class="nav__link nav__link--hoverable <?= $pageactive === '5' ? 'nav__link--active' : ''?>">Менеджеры</a>
                        </li>
                        <li class="nav__item">
                            <a href="{{route('gallery.index')}}" class="nav__link nav__link--hoverable <?= $pageactive === '6' ? 'nav__link--active' : ''?>">Галерея (фото)</a>
                        </li>
                        <li class="nav__item">
                            <a href="{{route('video.index')}}" class="nav__link nav__link--hoverable <?= $pageactive === '7' ? 'nav__link--active' : ''?>">Галерея (видео)</a>
                        </li>
                        <li class="nav__item">
                            <a href="{{route('terms.index')}}" class="nav__link nav__link--hoverable <?= $pageactive === '8' ? 'nav__link--active' : ''?>">Условия рассрочки</a>
                        </li>
                        <li class="nav__item">
                            <a href="{{route('mort.index')}}" class="nav__link nav__link--hoverable <?= $pageactive === '9' ? 'nav__link--active' : ''?>">Условия ипотеки</a>
                        </li>
                        <li class="nav__item">
                            <a href="{{route('payment30.index')}}" class="nav__link nav__link--hoverable <?= $pageactive === '10' ? 'nav__link--active' : ''?>">30% оплата</a>
                        </li>
                        <li class="nav__item">
                            <a href="{{route('payment50.index')}}" class="nav__link nav__link--hoverable <?= $pageactive === '11' ? 'nav__link--active' : ''?>">50% оплата</a>
                        </li>
                        <li class="nav__item">
                            <a href="{{route('payment100.index')}}" class="nav__link nav__link--hoverable <?= $pageactive === '12' ? 'nav__link--active' : ''?>">100% оплата</a>
                        </li>
                        <li class="nav__item">
                            <a href="{{route('news.index')}}" class="nav__link nav__link--hoverable <?= $pageactive === '13' ? 'nav__link--active' : ''?>">Новости</a>
                        </li>
                        <li class="nav__item">
                            <a href="{{route('contact.index')}}" class="nav__link nav__link--hoverable <?= $pageactive === '14' ? 'nav__link--active' : ''?>">Контакты</a>
                        </li>
                        <li class="nav__item">
                            <a href="{{route('metatags.index')}}" class="nav__link nav__link--hoverable <?= $pageactive === '15' ? 'nav__link--active' : ''?>">Мета теги </a>
                        </li>
                        <li class="nav__item">
                            <a href="{{route('chatid.index')}}" class="nav__link nav__link--hoverable <?= $pageactive === '16' ? 'nav__link--active' : ''?>">Chat ID</a>
                        </li>
                    </ul>
                </nav>
                <div class="leave">
                    <a href="/">
                        Выйти
                    </a>
                </div>
            </aside>
        </div>
    </header>

    @yield('content')

</div>
<!-- /.wrapper -->

<script src="/admin/libraries/phonemask/phonemask.min.js"></script>
<script src="/admin/js/script.js"></script>

</body>

</html>
