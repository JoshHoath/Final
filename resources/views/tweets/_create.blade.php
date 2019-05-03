<div class="col-md-6 offset-3">
    <h1 class="title text-center">What's on your mind?</h1>
    <form action="/tweets"  method="post">
        @csrf
        <div class="form-group">
            <textarea name="body"  class="form-control" placeholder="Let's see how funny you think you are"></textarea>
        </div>
        <gif-search>

        </gif-search>
        <div class="text-right">
            <button class="btn btn-primary" type="submit">Tweet</button>
        </div>
        <div class="form-group">
            @if($errors->any())
            <ul class="alert alert-danger">
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
            @endif
        </div>
    </form>
</div>
