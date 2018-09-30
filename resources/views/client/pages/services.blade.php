@extends('client.master')

@section('meta-title', 'Послуги')
@section('description', 'Послуги')
@section('keywords', 'Послуги')

@section('content')

    <main class="page" id="services">
        <div class="page-title">Послуги</div>
        <div class="container">
            <ul class="breadcrumbs">
                <li><a href="{{URL::to('/')}}">Головна</a></li>
                <li>Послуги</li>
            </ul>
            <!-- /.breadcrumbs -->

            <section class="container section">
                <ul class="service-list">
                    <li class="item">
                        <a href="#" class="link">
                            <img class="img" src="/client/assets/images/static/services/s1.png" alt="">
                            <strong>Скринінг та рання діагностика</strong>
                            <span class="sub-text">MiR-TECT<br/> ОНКО Check-Up</span>
                        </a>
                    </li>
                    <li class="item">
                        <a href="#" class="link">
                            <img class="img" src="/client/assets/images/static/services/s2.png" alt="">
                            <strong>Індивідуальна чутливість до протипухлинних препаратів </strong>
                            <span class="sub-text">ОНКО Drug Test</span>
                        </a>
                    </li>
                    <li class="item">
                        <a href="#" class="link">
                            <img class="img" src="/client/assets/images/static/services/s3.png" alt="">
                            <strong>Онкогематологічні дослідження</strong>
                        </a>
                    </li>
                    <li class="item">
                        <a href="#" class="link">
                            <img class="img" src="/client/assets/images/static/services/s4.png" alt="">
                            <strong>Загальноклінічні аналізи</strong>
                        </a>
                    </li>
                </ul>
                <!-- /.container -->
            </section>

            <article class="news-article">
                <h1 class="news-article-title">СКРИНІНГ ТА РАННЯ ДІАГНОСТИКА </h1>

                <h3 class="text-xs-center">Чи може бути в мене рак? Де я можу на це «перевіритися»?</h3>

                <blockquote>
                    Рання діагностика та скринінг раку є надзвичайно важливими складовими боротьби з новоутвореннями. Основне завдання полягає в тому, щоб виявити захворювання на найбільш ранніх стадіях, встановити діагноз та розпочати лікування без зволікань
                </blockquote>
                <blockquote>
                    Коли потрібно проводити скринінгові дослідження? Коли виникають питання: «Чи може бути в мене рак? З чого почати свою діагностику?» Коли з`явилися тривожні симптоми, коли в родині вже були випадки захворювання на рак та коли Ви дбаєте про своє здоров`я та піклуєтесь про своїх рідних
                </blockquote>
                <blockquote>
                    Онкологічне захворювання – складний процес безконтрольного розмноження змінених клітин з проникненням в інші тканини, що супроводжується їх руйнуванням та метастазуванням. Вирішальне значення для розробки ефективної стратегії лікування має раннє (до клінічних проявів) виявлення новоутворень!!!
                </blockquote>

                <picture>
                    <source srcset="/client/assets/images/static/services/img-1_tablet.jpg" media="(max-width: 768px)">
                    <source srcset="/client/assets/images/static/services/img-1_mobile.jpg" media="(max-width: 576px)">
                    <img src="/client/assets/images/static/services/img-1.jpg" alt="Онкологічне захворювання">
                </picture>

                <h2 class="text-xs-center">ОНКО Check-Up</h2>

                <b class="text-xs-center" style="display: block; font-size: 24px">Для цього потрібно</b>

                <ul>
                    <li>звернутися до клініки</li>
                    <li>записатися на зручний для Вас час</li>
                    <li>прийти на консультацію до лікаря (без генетика, онколога)</li>
                    <li>здати необхідні аналізи (кров, сеча)</li>
                </ul>

                <p>Результати аналізу видаються в зручній формі із детально описаним заключенням та найоптимальнішими рекомендаціями!
                    <span class="pink"><b>Вартість дослідження - 3950 грн</b></span>
                </p>
            </article>
            <ul class="service-list service-2">
                <li class="item">
                    <a href="#" class="link">
                        <img class="img" src="/client/assets/images/static/services/s5.png" alt="">
                        <strong class="sub-text-small">Застосування найбільш інформативних, чутливих та специфічних методів дослідження</strong>
                    </a>
                </li>
                <li class="item">
                    <a href="#" class="link">
                        <img class="img" src="/client/assets/images/static/services/s6.png" alt="">
                        <strong class="sub-text-small">Використання комплексного підходу для оцінки стану організму</strong>
                    </a>
                </li>
                <li class="item">
                    <a href="#" class="link">
                        <img class="img" src="/client/assets/images/static/services/s7.png" alt="">
                        <strong class="sub-text-small">Інноваційно-трансляційний принцип із застосуванням Європейських стандартів</strong>
                    </a>
                </li>
                <li class="item">
                    <a href="#" class="link">
                        <img class="img" src="/client/assets/images/static/services/s8.png" alt="">
                        <strong class="sub-text-small">Малоінвазивні та безпечні методи дослідження</strong>
                    </a>
                </li>
            </ul>
            <!-- /.container -->
            <article class="news-article">
                <p><b>Якщо Ви не можете приїхати особисто до клініки, ми пропонуємо пройти інший варіант скринінгового дослідження miR-ТЕСТ</b></p>

                <picture>
                    <source srcset="/client/assets/images/static/services/img-2_tablet.jpg" media="(max-width: 768px)">
                    <source srcset="/client/assets/images/static/services/img-2_mobile.jpg" media="(max-width: 576px)">
                    <img src="/client/assets/images/static/services/img-2.jpg" alt="miR-ТЕСТ">
                </picture>

                <h2 class="text-xs-center">miR-ТЕСТ</h2>

                <p class="text-xs-center" style="font-size: 24px"><b>В основі miR-ТЕСТу лежить аналіз <a href="#">мікроРНК</a></b></p>

                <ul>
                    <li>Оцінка рівнів мікроРНК в плазмі крові дозволяє визначити ризик розвитку новоутворень більшості локалізацій та передбачати  ризик розвитку рецидивів.</li>
                    <li>Циркулючі мікроРНК є стабільними, селективними та специфічними до певних видів новоутворень.</li>
                    <li> В клініці Онкотераностика є можливість індивідуально підібрати варіант miR-ТЕСТу  в залежності від побажань клієнта, а також сформувати персональну панель мікроРНК з урахуванням стану здоров’я та способу життя.</li>
                    <li>Термін виконання – 5-10 робочих днів</li>
                </ul>
            </article>

            <section class="cards" id="service-list">
                <div class="card card-pink">
                    <h4 class="header">miR-ТЕСТ «Пані»</h4>
                    <p class="title">Оцінка ризику виникнення:</p>
                    <ul class="ul check-list">
                        <li class="item">раку молочної залози</li>
                        <li class="item">раку шийки матки</li>
                        <li class="item">раку яєчника</li>
                    </ul>
                    <div class="bottom">4200 грн.</div>
                </div>
                <!-- /.card -->
                <div class="card card-pink">
                    <h4 class="header">miR-ТЕСТ «Пані+»</h4>
                    <p class="title">Оцінка ризику виникнення:</p>
                    <ul class="ul check-list">
                        <li class="item">раку молочної залози</li>
                        <li class="item">раку шийки матки</li>
                        <li class="item">раку яєчника</li>
                        <li class="item">раку кишечнику</li>
                        <li class="item">раку шлунку</li>
                        <li class="item">раку щитовидної залози</li>
                    </ul>
                    <div class="bottom">6600 грн.</div>
                </div>
                <!-- /.card -->
                <div class="card card-blue">
                    <h4 class="header">miR-ТЕСТ «Пан»</h4>
                    <p class="title">Оцінка ризику виникнення:</p>
                    <ul class="ul check-list">
                        <li class="item">раку легені</li>
                        <li class="item">раку передміхурової залози</li>
                        <li class="item">раку шлунку</li>
                    </ul>
                    <div class="bottom">4200 грн.</div>
                </div>
                <!-- /.card -->
                <div class="card card-blue">
                    <h4 class="header">miR-ТЕСТ «Пан+»</h4>
                    <p class="title">Оцінка ризику виникнення:</p>
                    <ul class="ul check-list">
                        <li class="item">раку легені</li>
                        <li class="item">раку передміхурової залози</li>
                        <li class="item">раку шлунку</li>
                        <li class="item">раку кишечнику</li>
                        <li class="item">раку сечового міхура</li>
                        <li class="item">раку нирки</li>
                    </ul>
                    <div class="bottom">6600 грн.</div>
                </div>
                <!-- /.card -->
                <div class="card">
                    <h4 class="header">miR-ТЕСТ «МОНО»</h4>
                    <p class="title">Оцінка ризику виникнення:</p>
                    <ul class="ul check-list">
                        <li class="item">одна будь-яка локалізація на вибір.</li>
                    </ul>
                    <div class="bottom">3000 грн.</div>
                </div>
                <!-- /.card -->
                <div class="card">
                    <h4 class="header">miR-ТЕСТ «МАКСІ» </h4>
                    <p class="title">Оцінка ризику виникнення:</p>
                    <ul class="ul check-list">
                        <li class="item"></li>
                        <li class="item">раку кишечнику</li>
                        <li class="item">раку шлунку</li>
                        <li class="item">раку щитовидної залози</li>
                        <li class="item">раку легені</li>
                        <li class="item">раку сечового міхура</li>
                        <li class="item">раку нирки</li>
                        <li class="item">раку печінки</li>
                        <li class="item">раку підшлункової залози</li>
                        <li class="item">раку молочної залози</li>
                        <li class="item">раку шийки матки</li>
                        <li class="item">раку яєчника</li>
                        <li class="item">раку передміхурової залози</li>
                    </ul>
                    <div class="bottom">10080 грн.</div>
                </div>
                <!-- /.card -->
            </section>
        </div>
        <!-- /.container -->

        <div class="order">
            <div class="container">
                <div class="inner">
                    <div style="flex: 0 0 auto;">
                        <img src="/client/assets/images/static/order.png" alt="" class="img" width="137px">
                    </div>
                    <p class="text">Залиште свій телефон та електронну адресу. Найближчим часом ми зв’яжемося з вами, допоможемо обрати найліпший для Вас варіант діагностики та зручний час для процедури.</p>
                    <div>
                        <button class="btn js-scroll" data-target="#footer">заявка</button>
                    </div>
                </div>
                <!-- /.order-inner -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.order -->

        @include('client.components.rnk')
    </main>
    <!-- /#team -->
@endsection
@push('scripts')
    {{--<script defer src="{{mix('/assets/pages/index.js', 'client')}}"></script>--}}
@endpush
@push('critical-css')
    <link rel="stylesheet" href="{{mix('/assets/pages/news-item.css', 'client')}}">
    <link rel="stylesheet" href="{{mix('/assets/pages/services.css', 'client')}}">
@endpush
