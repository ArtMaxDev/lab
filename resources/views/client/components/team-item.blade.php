<a href="{{route('client.team.index')}}" class="item">
    @include('client.components.team-member', [
           'image' => "{$member->image}.jpg"
       ])
    <div class="content">
        <strong class="name">{{$member->getLocalizedProperty('name')}}</strong>
        <span class="sub-text">{{$member->getLocalizedProperty('description')}}</span>
    </div>
</a>
