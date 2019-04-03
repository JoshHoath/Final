<div class="col-md-6 offset-3" onclick=location.href="/tweets/{{$tweet->id}}">
    <div class="card-body text-left">
        <h5 class="card-header">{{ $tweet->user->username }}</h5>
        <h6 class="card-text">{{ $tweet->body }}</h6>
        <div class="row">
            @if(Auth::id() == $tweet->user_id)
            <a href="/tweets/{{ $tweet->id }}/tweets/{{ $tweet->id }}/edit">Edit</a>
            @endif
        <div>
            <a href="/likes/{{ $tweet->id }}/tweets">{{ ($tweet->is_liked ? 'Unlike' : 'Like' ) }}</a>
            <a href="/tweets/{{$tweet->id}}">Comment</a>
        </div>
        </div>
    </div>
</div>
