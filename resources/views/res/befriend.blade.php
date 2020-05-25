<div class="friend_card incoming_request">
    <a href="/profile/{{$f->id}}"><img src="{{$f->returnFriend()->avatar}}" alt="Avatar de {{$f->returnFriend()->name}}" /></a>
    <a href="/profile/{{$f->id}}"><span class="friend_name">{{$f->returnFriend()->name}}</span></a>
    <span class="friend_name">{{$f->returnFriend()->level}}</span>
    <a href="/accept/{{$f->id}}">{{ __('friend.add') }}</a>
    <a href="/refuse/{{$f->id}}">{{ __('friend.refuse') }}</a>
</div>
