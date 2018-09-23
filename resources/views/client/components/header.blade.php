<nav class="container nav">
    <div class="nav-brand">
        <a href="/" >
            <img src="/client/assets/images/static/logo.png" alt="" class="nav-logo">
        </a>
        <ul class="nav-lang">
            <li class="nav-lang-item"><a href="#" class="nav-lang-link">Укр</a></li>
            <li class="nav-lang-item disabled"><a href="#" class="nav-lang-link">Eng</a></li>
        </ul>
    </div>
    <label for="nav-toggle" class="nav-toggle-button">Toggle Navigation</label>
    <input type="checkbox" id="nav-toggle" class="nav-toggle">
    <ul class="nav-menu">
        <li class="nav-item"><a href="#about" class="nav-link js-scroll">Про нас</a></li>
        <li class="nav-item"><a href="{{route('client.services.index')}}" class="nav-link">Послуги</a></li>
        <li class="nav-item"><a href="{{route('client.news.index')}}" class="nav-link">Корисна інформація</a></li>
        <li class="nav-item"><a href="{{route('client.team.index')}}" class="nav-link">Команда</a></li>
        <li class="nav-item"><a href="#footer" class="nav-link js-scroll">Контакти</a></li>
    </ul>
</nav>
<!-- /.container -->
