<div class="friend friend_request">
    <div class="friend__picture" style="background-image: url('{{$user->avatar}}')"></div>
    <span class="friend__name">{{$user->name}}</span>
    <span class="friend__level">Level {{$user->level}}</span>
    @if(\Illuminate\Support\Facades\Auth::user()->sent_fr->contains('idReceiver', $user->id))
        <span class="button_empty_small">{{ __('friend.sent') }}</span>
    @else
        <a href="/add/{{$user->id}}" class="button_full_small">{{ __('friend.add') }}</a>
    @endif()
</div>
