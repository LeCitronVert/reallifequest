<div class="friend_card friend_request">
    <img src="{{$user->avatar}}" alt="Avatar de {{$user->name}}" />
    <span class="friend_name">{{$user->name}}</span>
    <span class="friend_name">{{$user->level}}</span>
    @if(\Illuminate\Support\Facades\Auth::user()->sent_fr->contains('idReceiver', $user->id))
        <span>{{ __('friend.sent') }}</span>
    @else
        <a href="/add/{{$user->id}}">{{ __('friend.add') }}</a>
    @endif()

</div>
