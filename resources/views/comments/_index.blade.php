<div class="col-md-8 col-md-offset-2">
    <div class="card-body">
        @foreach($tweet->comments as $comment)
            @include('comments._comment')
        @endforeach
        <div class="text-right">
        @if(Auth::id() == $tweet->user_id)
            <a class="btn btn-danger" href="/delete">Delete</a>
        @endif
        </div>
    </div>
</div>
