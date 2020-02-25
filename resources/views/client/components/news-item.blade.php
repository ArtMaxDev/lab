<a href="{{route('client.news.item', $news->id)}}" class="ot-item ot-news-item">
    <article class="ot-content">
        <picture>
            <source srcset="{{$news->image}}_small.jpg" media="(max-width: 768px)">
            <img src="{{$news->image}}.jpg" alt="{{$news->image_alt}}" class="ot-img" width="100%" height="230px">
        </picture>

        <time datetime="{{$news->publicated_at}}">{{$news->publicated_at}}</time>
        <h5 class="ot-title">{{$news->getLocalizedProperty('title')}}</h5>
        <p class="ot-description">{{$news->getLocalizedProperty('description')}}</p>
    </article>
</a>
