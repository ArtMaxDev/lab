@extends('client.master')
@section('content')

    <section class="slider">
        <div id="slider">
            @each('client.components.slide-item', $slides, 'slide')
        </div>
    </section>

    <section class="container section" id="services">
        <div class="services">
            <figure class="item">
                <img src="/client/assets/images/static/service-1.png" alt="Індивідуальна програма ранньої діагностики" class="img">
                <figcaption>
                    <strong class="main-text">Індивідуальна програма ранньої діагностики</strong>
                    <p class="sub-text">Попереджений - означає озброєний!</p>
                </figcaption>
            </figure>
            <figure class="item">
                <img src="/client/assets/images/static/service-2.png" alt="Молекулярно-епігенетична оцінка стану організму" class="img">
                <figcaption>
                    <strong class="main-text">Молекулярно-епігенетична оцінка стану організму</strong>
                </figcaption>
            </figure>
            <figure class="item">
                <img src="/client/assets/images/static/service-3.png" alt="Інноваційні діагностичні підходи" class="img">
                <figcaption>
                    <strong class="main-text">Інноваційні діагностичні підходи</strong>
                    <p class="sub-text">Малоінвазивні методи дослідження</p>
                </figcaption>
            </figure>
        </div>
        <!-- /.services -->
    </section>
    <!-- /#services -->

    <section id="about" class="section about">
        <div class="container">
            <h2 class="about-title">Клініка персоналізованого дизайну <br/> діагностики і терапії «Онкотераностика»</h2>
            <article class="article">
                <img src="/client/assets/images/static/about.jpg" alt="Клініка персоналізованого дизайну" class="img">
                <div class="content">
                    <h3 class="title">Персоналізована медицина – це вже не забаганка, а нагальна необхідність сьогодення!</h3>
                    <p>Ми надаємо унікальні в Українi послуги з використанням лабораторної, епігенетичної та молекулярно-генетичної діагностики:
                    </p>
                    <p>
                        •   Стратегія  ранньої   діагностики   раку   –   програми дослідження ОНКО Check-Up та miR-ТЕСТ, яка дозволяє виявити онкологічне захворювання ще до появи клінічних симптомів. <br/>
                        •   Використання  нових  біомаркерів раку (циркулюючі та пухлинні мікроРНК) для дослідження чутливості до протипухлинної терапії та прогнозування  перебігу  захворювання
                    </p>
                    <p>Команда співробітників «Онкотераностика» складається із висококваліфікованих спеціалістів в галузях як клінічної, так і фундаментальної онкології, серед яких доктори та кандидати наук із значним стажем роботи, великим науковим та практичним доробком, автори більше 500 наукових статей, власники патентів, лауреати Премій та Грантів.
                    </p>
                </div>
                <!-- /.content -->
            </article>
        </div>
        <!-- /.container -->

    </section>
    <!-- /#about -->

    <section class="container section services-2" id="services-2">
        <h2 class="section-title">Послуги</h2>
        <ul class="service-list">
            <li class="item">
                <a href="{{route('client.services.index')}}" class="link">
                    <img class="img" src="/client/assets/images/static/s1.png" alt="Рання діагностика раку">
                    <strong>Рання діагностика раку</strong>
                    <span class="sub-text">MiR-TECT<br/> ОНКО Check-Up</span>
                </a>
            </li>
            <li class="item">
                <a href="{{route('client.services.index')}}" class="link">
                    <img class="img" src="/client/assets/images/static/s2.png" alt="Індивідуальна чутливість до протипухлинних препаратів ">
                    <strong>Індивідуальна чутливість до протипухлинних препаратів </strong>
                    <span class="sub-text">ОНКО Drug Test</span>
                </a>
            </li>
            <li class="item">
                <a href="{{route('client.services.index')}}" class="link">
                    <img class="img" src="/client/assets/images/static/s3.png" alt="Онкогематологічні дослідження">
                    <strong>Онкогематологічні дослідження</strong>
                </a>
            </li>
            <li class="item">
                <a href="{{route('client.services.index')}}" class="link">
                    <img class="img" src="/client/assets/images/static/s4.png" alt="Загальноклінічні аналізи">
                    <strong>Загальноклінічні аналізи</strong>
                </a>
            </li>
        </ul>
        <!-- /.container -->
    </section>
    <!-- /#services-2 -->

    @include('client.components.rnk')

    <section class="section container team" id="team">
        <h2 class="section-title">Наша команда</h2>
        <div id="slider-team">
            @each('client.components.team-item', [1,2,3,4,5], 'member')
        </div>
        <!-- /#slider-team -->
    </section>
    <!-- /#team -->
    @if($news->count())
    <section class="section container news" id="news">
        <h2 class="section-title">Новини</h2>
        <div id="slider-news">
            @each('client.components.news-item', $news, 'news')
        </div>
        <!-- /#slider-team -->
    </section>
    @endif
    <!-- /#news -->
@endsection
@push('scripts')
    <script defer src="{{mix('/assets/pages/index.js', 'client')}}"></script>
@endpush
@push('critical-css')
    <link rel="stylesheet" href="{{mix('/assets/pages/index.css', 'client')}}">
@endpush
