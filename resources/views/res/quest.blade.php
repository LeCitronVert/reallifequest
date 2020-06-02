@if($q->state == "completed")
    <div class="quest completed">
@elseif($q->state != "completed")
    <div class="quest">
@endif()
        <div class="quest__header">
            @if($q->state == "pending")
                <div class="quest__header__icon" style="background-image: url('./img/scroll_question.png')"></div>
            @elseif($q->state != "pending")
                <div class="quest__header__icon" style="background-image: url('./img/scroll_red.png')"></div>
            @endif()
            <span class="quest__header__title title">{{$q->prompt}}</span>
            <div class="quest__header__value">
                <span class="quest__footer__value__number">{{$q->xp}}</span>
            </div>
        </div>
        <div class="quest__content">
            <p>{{$q->desc}}</p>
        </div>
        <div class="quest__footer">
            @if($q->state != "refused")
                <span class="quest__footer__timer">{{\Carbon\Carbon::parse($q->timelimit)->diffForHumans()}}</span>
            @endif()
            @if($q->state == "pending")
                <div class="quest__footer__choices">
                    <a href="/quest/accept/{{$q->id}}"><img src="/img/accept.png" alt="accept"></a>
                    <a href="/quest/refuse/{{$q->id}}"><img src="/img/deny.png" alt="deny"></a>
                </div>
            @endif()
            @if($q->state == "accepted")
                <a href="/quest/complete/{{$q->id}}"><i class="fa fa-bullseye"></i></a>
            @endif()
        </div>
    </div>