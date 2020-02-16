@extends('client.master')

@section('title', __('main.title'))
@section('meta-title', __('main.title'))
@section('content')

    <section class="ot-slider">
        <div id="slider">
            @each('client.components.slide-item', $slides, 'slide')
        </div>
    </section>

    <section class="ot-container ot-section" id="services">
        <div class="ot-services">
                <figure class="ot-item">
                    <div>
                        <img src="/client/assets/images/static/service-1.png" alt="@lang('main.services[0].title')" class="ot-img">
                    </div>
                    <figcaption>
                        <strong class="ot-main-text">@lang('main.services.0.title')</strong>
                        <p class="ot-sub-text">@lang('main.services.0.description')</p>
                    </figcaption>
                </figure>
                <figure class="ot-item">
                    <div><img src="/client/assets/images/static/service-2.png" alt="@lang('main.services.1.title')" class="ot-img"></div>
                    <figcaption>
                        <strong class="ot-main-text">@lang('main.services.1.title')</strong>
                    </figcaption>
                </figure>
                <figure class="ot-item">
                    <div><img src="/client/assets/images/static/service-3.png" alt="@lang('main.services.2.title')" class="ot-img"></div>
                    <figcaption>
                        <strong class="ot-main-text">@lang('main.services.2.title')</strong>
                        <p class="ot-sub-text">@lang('main.services.2.description')</p>
                    </figcaption>
                </figure>
        </div>
        <!-- /.services -->
    </section>
    <!-- /#services -->

    <section id="about" class="ot-section ot-about">
        <div class="ot-container">
            <h2 class="ot-about-title">@lang('main.about.section-title')</h2>
            <article class="ot-article">
                <img src="/client/assets/images/static/about.jpg" alt="@lang('main.about.section-title')" class="ot-img">
                <div class="ot-content">
                    <h3 class="ot-title">@lang('main.about.title')</h3>
                    {!! __('main.about.content') !!}
                </div>
                <!-- /.content -->
            </article>
        </div>
        <!-- /.container -->

    </section>
    <!-- /#about -->

    <section class="ot-container ot-section ot-services-2" id="services-2">
        <h2 class="ot-section-title">@lang('main.services-2.section-title')</h2>
        <ul class="ot-service-list">
            <li class="ot-item">
                <a href="{{route('client.services.index')}}" class="ot-link">
                    <img class="ot-img" src="/client/assets/images/static/s1.png" alt="@lang('main.services-2.list.0.title')">
                    <strong>@lang('main.services-2.list.0.title')</strong>
                    <span class="ot-sub-text">{!! __('main.services-2.list.0.description') !!}</span>
                </a>
            </li>
            <li class="ot-item">
                <a href="{{route('client.services-2.index')}}" class="ot-link">
                    <img class="ot-img" src="/client/assets/images/static/s2.png" alt="@lang('main.services-2.list.1.title')">
                    <strong>@lang('main.services-2.list.1.title')</strong>
                    <span class="ot-sub-text">@lang('main.services-2.list.1.description')</span>
                </a>
            </li>
            <li class="ot-item">
                <a href="{{route('client.services-3.index')}}" class="ot-link">
                    <img class="ot-img" src="/client/assets/images/static/s3.png" alt="@lang('main.services-2.list.2.title')">
                    <strong>@lang('main.services-2.list.2.title')</strong>
                </a>
            </li>
            <li class="ot-item">
                <a href="/storage/price.pdf" target="_blank" class="ot-link">
                    <img class="ot-img" src="/client/assets/images/static/s4.png" alt="@lang('main.services-2.list.3.title')">
                    <strong>@lang('main.services-2.list.3.title')</strong>
                </a>
            </li>
        </ul>
        <!-- /.container -->
    </section>
    <!-- /#services-2 -->

    @include('client.components.rnk-' . $currentLocale)

    <section class="ot-section ot-container ot-team" id="team">
        <h2 class="ot-section-title">@lang('team.title')</h2>
        <div id="slider-team">
            @each('client.components.team-item', $team, 'member')
        </div>
        <!-- /#slider-team -->
    </section>
    <!-- /#team -->
    @if($news->count())
    <section class="ot-section ot-container ot-news" id="news">
        <h2 class="ot-section-title">@lang('news.title')</h2>
        <div id="ot-slider-news">
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
