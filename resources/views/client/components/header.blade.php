<nav class="ot-container ot-nav">
    <div class="ot-nav-brand">
        <a href="/" >
            <img src="/client/assets/images/static/@lang('main.logo').png" alt="Логотип ОНКОТераностика" class="ot-nav-logo">
        </a>
        <ul class="ot-nav-lang">
            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                <li class="ot-nav-lang-item @if($localeCode === $currentLocale) ot-disabled @endif">
                    <a class="ot-nav-lang-link" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                        {{ $properties['native'] }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
    <label for="nav-toggle" class="ot-nav-toggle-button">Toggle Navigation</label>
    <input type="checkbox" id="nav-toggle" class="ot-nav-toggle">
    <ul class="ot-nav-menu">
        <li class="ot-nav-item"><a href="{{URL::current() === URL::to('/') ? '#about' : '/#about'}}" class="ot-nav-link {{URL::current() !== URL::to('/') ?: 'js-scroll'}}">@lang('main.nav.about')</a></li>
        <li class="ot-nav-item ot-dropdown">
            <input id="services-dropdown" type="checkbox" name="services-dropdown" />
            <label for="services-dropdown" class="ot-nav-link">@lang('main.nav.services.title')</label>
            <ul class="ot-submenu">
                @foreach($services as $service)
                    <li><a href="{{$service->getUrl()}}" class="ot-nav-link" target="{{$service->url_target}}">{{$service->getLocalizedProperty('title')}}</a></li>
                @endforeach
            </ul>
        </li>
        <li class="ot-nav-item"><a href="{{LaravelLocalization::getLocalizedURL($currentLocale, route('client.news.index'), [], false)}}" class="ot-nav-link">@lang('main.nav.info')</a></li>
        @if($team->count())
        <li class="ot-nav-item"><a href="{{LaravelLocalization::getLocalizedURL($currentLocale, route('client.team.index'), [], false)}}" class="ot-nav-link">@lang('main.nav.team')</a></li>
        @endif
        <li class="ot-nav-item"><a href="#footer" class="ot-nav-link js-scroll">@lang('main.nav.contact')</a></li>
    </ul>
</nav>
<!-- /.container -->
