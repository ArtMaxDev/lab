@extends('client.master')

@section('meta-title', 'Cкринінг та рання діагностика')
@section('description', 'Cкринінг та рання діагностика')
@section('keywords', 'Cкринінг, рання діагностика, рак, аналізи, miR-ТЕСТ')

@section('content')

    <main class="ot-page" id="services">
        <div class="ot-page-title">Cкринінг та рання діагностика</div>
        <div class="ot-container">
            <ul class="ot-breadcrumbs">
                <li><a href="{{URL::to('/')}}">@lang('main.title')</a></li>
                <li><a href="/#services-2">Послуги</a></li>
                <li>СКРИНІНГ ТА РАННЯ ДІАГНОСТИКА</li>
            </ul>
            <!-- /.breadcrumbs -->

            <article class="ot-news-article">
                <h1 class="ot-news-article-title">СКРИНІНГ ТА РАННЯ ДІАГНОСТИКА </h1>

                <h3 class="ot-text-xs-center">Чи може бути в мене рак? Де я можу на це «перевіритися»?</h3>

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

                <h2 class="ot-text-xs-center">ОНКО Check-Up</h2>

                <b class="ot-text-xs-center" style="display: block; font-size: 24px">Для цього потрібно</b>

                <ul>
                    <li>звернутися до клініки</li>
                    <li>записатися на зручний для Вас час</li>
                    <li>прийти на консультацію до лікаря</li>
                    <li>здати необхідні аналізи (кров, сеча)</li>
                </ul>

                <p>Результати аналізу видаються в зручній формі із детально описаним заключенням та найоптимальнішими рекомендаціями!
                    <span class="ot-pink"><b>Вартість дослідження - 3950 грн</b></span>
                </p>
            </article>
            <ul class="ot-service-list ot-service-2">
                <li class="ot-item">
                    <a href="javascript:void(0)" class="ot-link">
                        <img class="ot-img" src="/client/assets/images/static/services/s5.png" alt="">
                        <strong class="ot-sub-text-small">Застосування найбільш інформативних, чутливих та специфічних методів дослідження</strong>
                    </a>
                </li>
                <li class="ot-item">
                    <a href="javascript:void(0)" class="ot-link">
                        <img class="ot-img" src="/client/assets/images/static/services/s6.png" alt="">
                        <strong class="ot-sub-text-small">Використання комплексного підходу для оцінки стану організму</strong>
                    </a>
                </li>
                <li class="ot-item">
                    <a href="javascript:void(0)" class="ot-link">
                        <img class="ot-img" src="/client/assets/images/static/services/s7.png" alt="">
                        <strong class="ot-sub-text-small">Інноваційно-трансляційний принцип із застосуванням Європейських стандартів</strong>
                    </a>
                </li>
                <li class="ot-item">
                    <a href="javascript:void(0)" class="ot-link">
                        <img class="ot-img" src="/client/assets/images/static/services/s8.png" alt="">
                        <strong class="ot-sub-text-small">Малоінвазивні та безпечні методи дослідження</strong>
                    </a>
                </li>
            </ul>
            <!-- /.container -->
            <article class="ot-news-article">
                <p><b>Якщо Ви не можете приїхати особисто до клініки, ми пропонуємо пройти інший варіант скринінгового дослідження miR-ТЕСТ</b></p>

                <picture>
                    <source srcset="/client/assets/images/static/services/img-2_tablet.jpg" media="(max-width: 768px)">
                    <source srcset="/client/assets/images/static/services/img-2_mobile.jpg" media="(max-width: 576px)">
                    <img src="/client/assets/images/static/services/img-2.jpg" alt="miR-ТЕСТ">
                </picture>

                <h2 class="ot-text-xs-center">miR-ТЕСТ</h2>

                <p class="ot-text-xs-center" style="font-size: 24px"><b>В основі miR-ТЕСТу лежить аналіз <a href="#">мікроРНК</a></b></p>

                <ul>
                    <li>Оцінка рівнів мікроРНК в плазмі крові дозволяє визначити ризик розвитку новоутворень більшості локалізацій та передбачати  ризик розвитку рецидивів.</li>
                    <li>Циркулючі мікроРНК є стабільними, селективними та специфічними до певних видів новоутворень.</li>
                    <li> В клініці Онкотераностика є можливість індивідуально підібрати варіант miR-ТЕСТу  в залежності від побажань клієнта, а також сформувати персональну панель мікроРНК з урахуванням стану здоров’я та способу життя.</li>
                    <li>Термін виконання – 5-10 робочих днів</li>
                </ul>
            </article>

            <section class="ot-cards" id="service-list">
                <div class="ot-card ot-card-pink">
                    <h4 class="ot-header">miR-ТЕСТ «Пані»</h4>
                    <p class="ot-title">Оцінка ризику виникнення:</p>
                    <ul class="ot-ul ot-check-list">
                        <li class="ot-item">раку молочної залози</li>
                        <li class="ot-item">раку шийки матки</li>
                        <li class="ot-item">раку яєчника</li>
                    </ul>
                    <div class="ot-bottom">4200 грн.</div>
                </div>
                <!-- /.card -->
                <div class="ot-card ot-card-pink">
                    <h4 class="ot-header">miR-ТЕСТ «Пані+»</h4>
                    <p class="ot-title">Оцінка ризику виникнення:</p>
                    <ul class="ot-ul ot-check-list">
                        <li class="ot-item">раку молочної залози</li>
                        <li class="ot-item">раку шийки матки</li>
                        <li class="ot-item">раку яєчника</li>
                        <li class="ot-item">раку кішківнику</li>
                        <li class="ot-item">раку шлунку</li>
                        <li class="ot-item">раку щитовидної залози</li>
                    </ul>
                    <div class="ot-bottom">6600 грн.</div>
                </div>
                <!-- /.card -->
                <div class="ot-card ot-card-blue">
                    <h4 class="ot-header">miR-ТЕСТ «Пан»</h4>
                    <p class="ot-title">Оцінка ризику виникнення:</p>
                    <ul class="ot-ul ot-check-list">
                        <li class="ot-item">раку легені</li>
                        <li class="ot-item">раку передміхурової залози</li>
                        <li class="ot-item">раку шлунку</li>
                    </ul>
                    <div class="ot-bottom">4200 грн.</div>
                </div>
                <!-- /.card -->
                <div class="ot-card ot-card-blue">
                    <h4 class="ot-header">miR-ТЕСТ «Пан+»</h4>
                    <p class="ot-title">Оцінка ризику виникнення:</p>
                    <ul class="ot-ul ot-check-list">
                        <li class="ot-item">раку легені</li>
                        <li class="ot-item">раку передміхурової залози</li>
                        <li class="ot-item">раку шлунку</li>
                        <li class="ot-item">раку кішківнику</li>
                        <li class="ot-item">раку сечового міхура</li>
                        <li class="ot-item">раку нирки</li>
                    </ul>
                    <div class="ot-bottom">6600 грн.</div>
                </div>
                <!-- /.card -->
                <div class="ot-card">
                    <h4 class="ot-header">miR-ТЕСТ «МОНО»</h4>
                    <p class="ot-title">Оцінка ризику виникнення:</p>
                    <ul class="ot-ul ot-check-list">
                        <li class="ot-item">одна будь-яка локалізація на вибір.</li>
                    </ul>
                    <div class="ot-bottom">3000 грн.</div>
                </div>
                <!-- /.card -->
                <div class="ot-card">
                    <h4 class="ot-header">miR-ТЕСТ «МАКСІ» </h4>
                    <p class="ot-title">Оцінка ризику виникнення:</p>
                    <ul class="ot-ul ot-check-list">
                        <li class="ot-item"></li>
                        <li class="ot-item">раку кішківнику</li>
                        <li class="ot-item">раку шлунку</li>
                        <li class="ot-item">раку щитовидної залози</li>
                        <li class="ot-item">раку легені</li>
                        <li class="ot-item">раку сечового міхура</li>
                        <li class="ot-item">раку нирки</li>
                        <li class="ot-item">раку печінки</li>
                        <li class="ot-item">раку підшлункової залози</li>
                        <li class="ot-item">раку молочної залози</li>
                        <li class="ot-item">раку шийки матки</li>
                        <li class="ot-item">раку яєчника</li>
                        <li class="ot-item">раку передміхурової залози</li>
                    </ul>
                    <div class="ot-bottom">10080 грн.</div>
                </div>
                <!-- /.card -->
            </section>
        </div>
        <!-- /.container -->

        <div class="ot-order">
            <div class="ot-container">
                <div class="ot-inner">
                    <div style="flex: 0 0 auto;">
                        <img src="/client/assets/images/static/order.png" alt="" class="ot-img" width="137px">
                    </div>
                    <p class="ot-text">Залиште свій телефон та електронну адресу. Найближчим часом ми зв’яжемося з вами, допоможемо обрати найліпший для Вас варіант діагностики та зручний час для процедури.</p>
                    <div>
                        <button class="ot-btn js-scroll" data-target="#footer">заявка</button>
                    </div>
                </div>
                <!-- /.order-inner -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.order -->

        @include('client.components.rnk-' . $currentLocale)
    </main>
    <!-- /#team -->
@endsection
@push('critical-css')
    <link rel="stylesheet" href="{{mix('/assets/pages/news-item.css', 'client')}}">
    <link rel="stylesheet" href="{{mix('/assets/pages/services.css', 'client')}}">
@endpush
