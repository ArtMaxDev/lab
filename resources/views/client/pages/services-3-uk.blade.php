@extends('client.master')

@section('title', 'Онкогематологічні дослідження')
@section('meta-title', 'Онкогематологічні дослідження')
@section('description', 'Онкогематологічні дослідження')
@section('keywords', 'Онкогематологічні дослідження')
@section('content')

    <main class="page" id="services">
        <div class="page-title">Онкогематологічні дослідження</div>
        <div class="container">
            <ul class="breadcrumbs">
                <li><a href="{{URL::to('/')}}">Головна</a></li>
                <li><a href="/#services-2">Послуги</a></li>
                <li>Онкогематологічні дослідження</li>
            </ul>
            <!-- /.breadcrumbs -->

            <article class="news-article">
                <h1 class="news-article-title">Онкогематологічні дослідження</h1>

                <picture>
                    <source srcset="/client/assets/images/static/s3-img-2_tablet.jpg" media="(max-width: 992px)">
                    <source srcset="/client/assets/images/static/s3-img-2_mobile.jpg" media="(max-width: 768px)">
                    <img src="/client/assets/images/static/s3-img-2.jpg" alt="Діагностика онкогематологічних захворювань здійснюється на основі комплексного дослідження препаратів периферичної крові і кісткового мозку.">
                </picture>
                <h2 class="subtitle pink">Відповідно до сучасної класифікації ВООЗ (2016 р.) ми здійснюємо діагностику таких онкогематологічних захворювань:
                </h2>

                <ul>
                    <li>гострі мієлоїдні та лімфобластні лейкози;</li>
                    <li>В-, Т- та НК-клітинні лімфопроліферативні захворювання (В-клітинний хронічний лімфолейкоз, В- і Т-пролімфоцитарний лейкоз, волосатоклітинний лейкоз, В-клітинні неходжкінські лімфоми у стадії лейкемізації);</li>
                    <li> мієлоїдні новоутворення (хронічний мієлолейкоз, справжня поліцитемія, первинний мієлофіброз, есенціальна тромбоцитемія);</li>
                    <li>плазмоклітинні пухлини (множинна мієлома і т.д.);</li>
                    <li>мієлодиспластичні синдроми;</li>
                    <li>мієлодиспластичні/мієлопроліферативні пухлини;</li>
                    <li>пухлини з гістіоцитів та дендритних клітин.</li>
                </ul>

                <h3 class="ul-title blue">Для діагностики застосовуються:</h3>

                <blockquote>
                    <div>Цитоморфологічні методи</div>
                </blockquote>
                <blockquote>
                    <div>Цитохімічні методи</div>
                    <p>А також визначення активності: мієлопероксидази, кислої фосфатази, кислої неспецифічної естерази, нафтол-AS-D-хлорацетатестерази, лужної фосфатази. Здійснюється PAS–реакція для визначення вмісту в клітинах глікогену.</p>
                </blockquote>
                <blockquote>
                    <div>Імунофенотипування</div>
                    <p>Сучасне комплексне дослідження, в якому за рахунок одночасної реєстрації декількох параметрів, забезпечується більша точність визначення природи злоякіснотрансформованих кровотворних і лімфоїдних клітин і є основою для проведення ефективного лікування.</p>
                </blockquote>

                <picture>
                    <source srcset="/client/assets/images/static/s3-img_tablet.jpg" media="(max-width: 992px)">
                    <source srcset="/client/assets/images/static/s3-img_mobile.jpg" media="(max-width: 768px)">
                    <img style="margin: 60px 0" src="/client/assets/images/static/s3-img.jpg" alt="Діагностика онкогематологічних захворювань здійснюється на основі комплексного дослідження препаратів периферичної крові і кісткового мозку.">
                </picture>
            </article>
        </div>
        <!-- /.container -->

    </main>
    <!-- /#team -->
@endsection
@push('critical-css')
    <link rel="stylesheet" href="{{mix('/assets/pages/news-item.css', 'client')}}">
    <link rel="stylesheet" href="{{mix('/assets/pages/services-2.css', 'client')}}">
@endpush
