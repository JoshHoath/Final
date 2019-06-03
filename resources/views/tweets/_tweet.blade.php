<div class="tweets col-md-6 offset-3">
    <div class="card-body text-left">
        <h5 class="card-header">{{ $tweet->user->username }}</h5>
        <h6 class="card-text">{{ $tweet->body }}</h6>
        <div class="row">
            @if(Auth::id() == $tweet->user_id)
            <a href="/tweets/{{ $tweet->id }}/tweets/{{ $tweet->id }}/edit">Edit</a>
            @endif
        <div>
            <like-button
                :id= "{{ $tweet->id }}"
                :liked="{{ ( $tweet->isLiked ? '1' : '0' )}}"
                :type="'tweet'"
                :count="{{ $tweet->likes()->count() }}"
            ></like-button>
            <a href="/tweets/{{$tweet->id}}">Comment</a>
        </div>
        </div>
    </div>
</div>
