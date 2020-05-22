<div class="quest">
    <span class="quest_prompt">{{$q->prompt}}</span>
    <p class="quest_desc">{{$q->desc}}</p>
    <span class="quest_xp">{{$q->xp}} XP</span>

    @if($q->state != "refused")
        <span class="quest_date">{{\Carbon\Carbon::parse($q->timelimit)->diffForHumans()}}</span>
    @endif()

    @if($q->state == "pending")
        <a href="/quest/accept/{{$q->id}}"><i class="fa fa-check"></i></a>
        <a href="/quest/refuse/{{$q->id}}"><i class="fa fa-times"></i></a>
    @endif()

    @if($q->state == "accepted")
        <a href="/quest/complete/{{$q->id}}"><i class="fa fa-bullseye"></i></a>
    @endif()
</div>
