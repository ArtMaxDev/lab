<a href="{{route('client.team.index')}}" class="item">
    @include('client.components.team-member', [
           'image' => $member['url']
       ])
    <div class="content">
        <strong class="name">{{$member['name']}}</strong>
        <span class="sub-text">{{$member['description']}}</span>
    </div>
</a>
