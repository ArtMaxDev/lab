<div class="slide">
    <img class="image tns-lazy-img" data-src="{{$slide->image}}.jpg" alt="{{$slide->image_alt}}">
    <div class="content {{$slide->style === 0 ?: 'light'}}">
        <div class="container">
            <div class="content-right">
                <h3 class="title">{{$slide->title_uk}}</h3>
                <p class="description">{{$slide->description_uk}}</p>
                <a href="{{$slide->link}}" class="btn">Узнать подробнее</a>
            </div>
        </div>
    </div>
</div>
