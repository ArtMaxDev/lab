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
                <li><a href="{{LaravelLocalization::getLocalizedURL($currentLocale, route('client.services.index'), [], false)}}" class="ot-nav-link">@lang('main.nav.services.screening')</a></li>
                <li><a href="{{LaravelLocalization::getLocalizedURL($currentLocale, route('client.services-2.index'), [], false)}}" class="ot-nav-link">@lang('main.nav.services.therapy')</a></li>
                <li><a href="{{LaravelLocalization::getLocalizedURL($currentLocale, route('client.services-3.index'), [], false)}}" class="ot-nav-link">@lang('main.nav.services.onco')</a></li>
                <li><a href="/storage/price.pdf" target="_blank" class="ot-nav-link">@lang('main.nav.services.tests')</a></li>
            </ul>
        </li>
        <li class="ot-nav-item"><a href="{{LaravelLocalization::getLocalizedURL($currentLocale, route('client.news.index'), [], false)}}" class="ot-nav-link">@lang('main.nav.info')</a></li>
        <li class="ot-nav-item"><a href="{{LaravelLocalization::getLocalizedURL($currentLocale, route('client.team.index'), [], false)}}" class="ot-nav-link">@lang('main.nav.team')</a></li>
        <li class="ot-nav-item"><a href="#footer" class="ot-nav-link js-scroll">@lang('main.nav.contact')</a></li>
    </ul>
</nav>
<!-- /.container -->
