<div class="col-md-8 offset-2">
    <h6>Comment</h6>
    <form method="post" action="{{ route('comment.add' ,  ['id' => $tweet->id]) }}">
        @csrf
        <div class="form-group">
            <input type="text" name="comment_body" class="form-control" />
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Add Comment" />
            </div>
        </div>
    </form>
</div>
