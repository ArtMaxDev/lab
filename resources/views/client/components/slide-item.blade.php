<div class="ot-slide">
    <picture>
        <source srcset="{{$slide->image}}_small.jpg" media="(max-width: 360px)">
        <img class="ot-image tns-lazy-img" data-src="{{$slide->image}}.jpg" alt="{{$slide->image_alt}}">
    </picture>

    <div class="ot-content {{$slide->style === 0 ?: 'light'}}">
        <div class="ot-container">
            <div class="ot-content-right">
                <h3 class="ot-title">{{$slide->getLocalizedProperty('title')}}</h3>
                <p class="ot-description">{{$slide->getLocalizedProperty('description')}}</p>
                <a href="{{$slide->link}}" class="ot-btn">@lang('main.slider.more')</a>
            </div>
        </div>
    </div>
</div>
