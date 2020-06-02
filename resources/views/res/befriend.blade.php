<!--<div class="friend_card incoming_request">
    <a href="/profile/{{$f->id}}"><img src="{{$f->returnFriend()->avatar}}" alt="Avatar de {{$f->returnFriend()->name}}" /></a>
    <a href="/profile/{{$f->id}}"><span class="friend_name">{{$f->returnFriend()->name}}</span></a>
    <span class="friend_name">{{$f->returnFriend()->level}}</span>
    <a href="/accept/{{$f->id}}">{{ __('friend.add') }}</a>
    <a href="/refuse/{{$f->id}}">{{ __('friend.refuse') }}</a>
</div>-->

<div class="friend">
    <a href="/profile/{{$f->id}}">
        <div class="friend__picture" style="background-image: url('{{$f->returnFriend()->avatar}}')"></div>
        <span class="friend__name">{{$f->returnFriend()->name}}</span>
        <span class="friend__level">Level {{$f->returnFriend()->level}}</span>
        <div class="friend__toggles">
            <a href="/accept/{{$f->id}}"><img src="/img/accept.png" alt="accept"></a>
            <a href="/refuse/{{$f->id}}"><img src="/img/deny.png" alt="deny"></a>
        </div>
    </a>
</div>
