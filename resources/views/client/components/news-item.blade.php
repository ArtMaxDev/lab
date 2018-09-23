@inject('carbon', '\Carbon\Carbon')
<a href="{{route('client.news.item', $news->id)}}" class="item news-item">
    <article class="content">
        <img src="{{$news->image}}.jpg" alt="{{$news->image_alt}}" class="img" width="100%" height="230px">
        <time datetime="{{$news->created_at}}">{{$carbon::createFromTimeString($news->created_at)->format('d.m.Y')}}</time>
        <h5 class="title">{{$news->title}}</h5>
        <p class="description">{{$news->description}}</p>
    </article>
</a>
