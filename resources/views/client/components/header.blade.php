<nav class="container nav">
    <div class="nav-brand">
        <a href="/" >
            <img src="/client/assets/images/static/logo.png" alt="Логотип ОНКОТераностика" class="nav-logo">
        </a>
        {{--<ul class="nav-lang">--}}
            {{--@foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)--}}
                {{--<li class="nav-lang-item @if($localeCode === $currentLocale) disabled @endif">--}}
                    {{--<a class="nav-lang-link" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">--}}
                        {{--{{ $properties['native'] }}--}}
                    {{--</a>--}}
                {{--</li>--}}
            {{--@endforeach--}}
        {{--</ul>--}}
    </div>
    <label for="nav-toggle" class="nav-toggle-button">Toggle Navigation</label>
    <input type="checkbox" id="nav-toggle" class="nav-toggle">
    <ul class="nav-menu">
        <li class="nav-item"><a href="{{URL::current() === URL::to('/') ? '#about' : '/#about'}}" class="nav-link {{URL::current() !== URL::to('/') ?: 'js-scroll'}}">Про нас</a></li>
        <li class="nav-item dropdown">
            <input id="services-dropdown" type="checkbox" name="services-dropdown" />
            <label for="services-dropdown" class="nav-link">Послуги</label>
            <ul class="submenu">
                <li><a href="{{LaravelLocalization::getLocalizedURL($currentLocale, route('client.services.index'), [], false)}}" class="nav-link">Скринінг та рання діагностика</a></li>
                <li><a href="{{LaravelLocalization::getLocalizedURL($currentLocale, route('client.services-2.index'), [], false)}}" class="nav-link">Чутливість до хіміотерапії</a></li>
                <li><a href="{{LaravelLocalization::getLocalizedURL($currentLocale, route('client.services-3.index'), [], false)}}" class="nav-link">Онкогематологічні дослідження</a></li>
                <li><a href="/storage/price.pdf" target="_blank" class="nav-link">Загальноклінічні аналізи</a></li>
            </ul>
        </li>
        <li class="nav-item"><a href="{{LaravelLocalization::getLocalizedURL($currentLocale, route('client.news.index'), [], false)}}" class="nav-link">Корисна інформація</a></li>
        <li class="nav-item"><a href="{{LaravelLocalization::getLocalizedURL($currentLocale, route('client.team.index'), [], false)}}" class="nav-link">Команда</a></li>
        <li class="nav-item"><a href="#footer" class="nav-link js-scroll">Контакти</a></li>
    </ul>
</nav>
<!-- /.container -->
