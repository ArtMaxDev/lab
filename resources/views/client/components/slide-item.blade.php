<div class="slide">
    <picture>
        <source srcset="{{$slide->image}}_small.jpg" media="(max-width: 768px)">
        <img class="image tns-lazy-img" data-src="{{$slide->image}}.jpg" alt="{{$slide->image_alt}}">
    </picture>

    <div class="content {{$slide->style === 0 ?: 'light'}}">
        <div class="container">
            <div class="content-right">
                <h3 class="title">{{$slide->title}}</h3>
                <p class="description">{{$slide->description}}</p>
                <a href="{{$slide->link}}" class="btn">Узнать подробнее</a>
            </div>
        </div>
    </div>
</div>
