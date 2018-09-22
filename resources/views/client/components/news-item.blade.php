<a href="#" class="item news-item">
    <article class="content">
        <img src="{{$news->image}}" alt="" class="img" width="100%" height="230px">
        <time>{{$news->created_at}}</time>
        <h5 class="title">{{$news->title}}</h5>
        <p class="description">{{$news->description}}</p>
    </article>
</a>
