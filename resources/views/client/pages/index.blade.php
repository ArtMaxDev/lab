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
            @foreach($services as $service)
                <li class="ot-item">
                    <a href="{{$service->getUrl()}}" class="ot-link" target="{{$service->url_target}}">
                        <img class="ot-img" src="{{$service->getImage()}}" alt="{{$service->getLocalizedProperty('title')}}">
                        <strong>{{$service->getLocalizedProperty('title')}}</strong>
                        <span class="ot-sub-text">{!! $service->getLocalizedProperty('description') !!}</span>
                    </a>
                </li>
            @endforeach
        </ul>
        <!-- /.container -->
    </section>
    <!-- /#services-2 -->

    @include('client.components.rnk-' . $currentLocale)

    @if($team->count())
    <section class="ot-section ot-container ot-team" id="team">
        <h2 class="ot-section-title">@lang('team.title')</h2>
        <div id="slider-team">
            @each('client.components.team-item', $team, 'member')
        </div>
        <!-- /#slider-team -->
    </section>
    <!-- /#team -->
    @endif
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
