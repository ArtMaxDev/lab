<a href="{{route('client.team.index')}}" class="ot-item">
    @include('client.components.team-member', [
           'image' => "{$member->image}.jpg"
       ])
    <div class="ot-content">
        <strong class="ot-name">{{$member->getLocalizedProperty('name')}}</strong>
        <span class="ot-sub-text">{{$member->getLocalizedProperty('description')}}</span>
    </div>
</a>
