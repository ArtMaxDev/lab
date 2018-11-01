@extends('client.master')

@section('title', __('main.title'))
@section('meta-title', __('main.title'))
@section('content')

    <section class="slider">
        <div id="slider">
            @each('client.components.slide-item', $slides, 'slide')
        </div>
    </section>

    <section class="container section" id="services">
        <div class="services">
                <figure class="item">
                    <div>
                        <img src="/client/assets/images/static/service-1.png" alt="@lang('main.services[0].title')" class="img">
                    </div>
                    <figcaption>
                        <strong class="main-text">@lang('main.services.0.title')</strong>
                        <p class="sub-text">@lang('main.services.0.description')</p>
                    </figcaption>
                </figure>
                <figure class="item">
                    <div><img src="/client/assets/images/static/service-2.png" alt="@lang('main.services.1.title')" class="img"></div>
                    <figcaption>
                        <strong class="main-text">@lang('main.services.1.title')</strong>
                    </figcaption>
                </figure>
                <figure class="item">
                    <div><img src="/client/assets/images/static/service-3.png" alt="@lang('main.services.2.title')" class="img"></div>
                    <figcaption>
                        <strong class="main-text">@lang('main.services.2.title')</strong>
                        <p class="sub-text">@lang('main.services.2.description')</p>
                    </figcaption>
                </figure>
        </div>
        <!-- /.services -->
    </section>
    <!-- /#services -->

    <section id="about" class="section about">
        <div class="container">
            <h2 class="about-title">@lang('main.about.section-title')</h2>
            <article class="article">
                <img src="/client/assets/images/static/about.jpg" alt="@lang('main.about.section-title')" class="img">
                <div class="content">
                    <h3 class="title">@lang('main.about.title')</h3>
                    {!! __('main.about.content') !!}
                </div>
                <!-- /.content -->
            </article>
        </div>
        <!-- /.container -->

    </section>
    <!-- /#about -->

    <section class="container section services-2" id="services-2">
        <h2 class="section-title">@lang('main.services-2.section-title')</h2>
        <ul class="service-list">
            <li class="item">
                <a href="{{route('client.services.index')}}" class="link">
                    <img class="img" src="/client/assets/images/static/s1.png" alt="@lang('main.services-2.list.0.title')">
                    <strong>@lang('main.services-2.list.0.title')</strong>
                    <span class="sub-text">{!! __('main.services-2.list.0.description') !!}</span>
                </a>
            </li>
            <li class="item">
                <a href="{{route('client.services-2.index')}}" class="link">
                    <img class="img" src="/client/assets/images/static/s2.png" alt="@lang('main.services-2.list.1.title')">
                    <strong>@lang('main.services-2.list.1.title')</strong>
                    <span class="sub-text">@lang('main.services-2.list.1.description')</span>
                </a>
            </li>
            <li class="item">
                <a href="{{route('client.services-3.index')}}" class="link">
                    <img class="img" src="/client/assets/images/static/s3.png" alt="@lang('main.services-2.list.2.title')">
                    <strong>@lang('main.services-2.list.2.title')</strong>
                </a>
            </li>
            <li class="item">
                <a href="/storage/price.pdf" target="_blank" class="link">
                    <img class="img" src="/client/assets/images/static/s4.png" alt="@lang('main.services-2.list.3.title')">
                    <strong>@lang('main.services-2.list.3.title')</strong>
                </a>
            </li>
        </ul>
        <!-- /.container -->
    </section>
    <!-- /#services-2 -->

    @include('client.components.rnk-' . $currentLocale)

    <section class="section container team" id="team">
        <h2 class="section-title">@lang('team.title')</h2>
        <div id="slider-team">
            @each('client.components.team-item', $team, 'member')
        </div>
        <!-- /#slider-team -->
    </section>
    <!-- /#team -->
    @if($news->count())
    <section class="section container news" id="news">
        <h2 class="section-title">@lang('news.title')</h2>
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
