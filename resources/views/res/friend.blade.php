<!--<div class="friend_card friend">
    <div>
        @if(isset($fren))
                @if($loop->iteration == 1)
                    <span><i class="fa fa-trophy" style="color: yellow;text-shadow: 1px 1px 2px black, 0 0 1em black, 0 0 0.2em black;"></i></span>
                @endif()
                @if($loop->iteration == 2)
                        <span><i class="fa fa-trophy" style="color: silver;text-shadow: 1px 1px 2px black, 0 0 1em black, 0 0 0.2em black;"></i></span>
                @endif()
                @if($loop->iteration == 3)
                        <span><i class="fa fa-trophy" style="color: saddlebrown;text-shadow: 1px 1px 2px black, 0 0 1em black, 0 0 0.2em black;"></i></span>
                @endif()
            <span>{{ $loop->iteration }}</span>
        @endif
    </div>
    <a href="/profile/{{$f->id}}"><img src="{{$f->returnFriend()->avatar}}" alt="Avatar de {{$f->returnFriend()->name}}" /></a>
    <a href="/profile/{{$f->id}}"><span class="friend_name">{{$f->returnFriend()->name}}</span></a>
    <span class="friend_name">{{$f->returnFriend()->level}}</span>
</div>-->


<div class="friend">
    <a href="/profile/{{$f->id}}">
        <div class="friend__picture" style="background-image: url('{{$f->returnFriend()->avatar}}')"></div>
        <span class="friend__name">{{$f->returnFriend()->name}}</span>
        <span class="friend__level">Level {{$f->returnFriend()->level}}</span>
    </a>
</div>